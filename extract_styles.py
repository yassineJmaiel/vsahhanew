import re
import hashlib

blade_path = r'c:\laragon\www\vsahhanew\resources\views\testdashboard.blade.php'
css_path = r'c:\laragon\www\vsahhanew\public\css\dashboard.css'

with open(blade_path, 'r', encoding='utf-8') as f:
    html = f.read()

# Find all unique styles
style_pattern = re.compile(r'style="([^"]+)"')
styles = set(style_pattern.findall(html))

# mapping from style string to class name
style_to_class = {}
css_rules = []

for s in styles:
    s_clean = s.strip()
    if not s_clean:
        continue
    h = hashlib.md5(s_clean.encode('utf-8')).hexdigest()[:6]
    cls = f"dc-{h}"  # dashboard-custom
    style_to_class[s] = cls
    
    # Format the CSS rule nicely
    props = [p.strip() for p in s_clean.split(';') if p.strip()]
    css_body = ';\n    '.join(props)
    if css_body:
        css_body += ';'
    css_rules.append(f".{cls} {{\n    {css_body}\n}}")

# Now, we need to replace in the HTML.
# We'll use a function that processes each tag.
# Regex to find any HTML tag with a style attribute
tag_pattern = re.compile(r'<([a-zA-Z0-9]+)\s+([^>]*?)style="([^"]+)"([^>]*?)>')

def replace_tag(match):
    tag_name = match.group(1)
    attrs_before = match.group(2)
    style_val = match.group(3)
    attrs_after = match.group(4)
    
    cls_name = style_to_class.get(style_val)
    if not cls_name:
        return match.group(0)
        
    all_attrs = attrs_before + attrs_after
    
    # Does it have a class attribute?
    class_match = re.search(r'class="([^"]*)"', all_attrs)
    if class_match:
        # append to existing class
        existing_classes = class_match.group(1)
        new_classes = f'{existing_classes} {cls_name}'
        # replace the class attribute
        new_attrs = all_attrs[:class_match.start(1)] + new_classes + all_attrs[class_match.end(1):]
    else:
        # add class attribute
        new_attrs = all_attrs + f' class="{cls_name}"'
        
    return f'<{tag_name} {new_attrs.strip()}>'

# Keep replacing until no more style attributes (in case of multiple, though our regex only handles one style attr per pass)
# Actually, the regex `([^>]*?)style="([^"]+)"([^>]*?)>` works.
new_html = html
old_html = ""
while old_html != new_html:
    old_html = new_html
    new_html = tag_pattern.sub(replace_tag, new_html)

# Clean up multiple spaces inside tags
new_html = re.sub(r'\s+>', '>', new_html)

with open(blade_path, 'w', encoding='utf-8') as f:
    f.write(new_html)

# Append to CSS
with open(css_path, 'a', encoding='utf-8') as f:
    f.write('\n\n/* Extracted Inline Styles */\n')
    f.write('\n\n'.join(css_rules))
    f.write('\n')

print(f"Extracted {len(style_to_class)} styles to classes.")
