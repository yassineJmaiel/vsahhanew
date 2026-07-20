<style>
  /* Reset */
  * {
    box-sizing: border-box;
  }

  body,
  html {
    margin: 0;
    padding: 0;
    font-family: 'Inter', sans-serif;
    width: 100%;
    height: 100%;
  }

  .background {
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background: linear-gradient(-45deg, #0B4F8A, #0D3D6E, #062A55, #0D3D6E);
    background-size: 400% 400%;
    animation: gradientMove 10s ease infinite;
    position: relative;
    overflow: hidden;
    padding: 2rem;
  }

  @keyframes gradientMove {
    0% {
      background-position: 0% 50%;
    }

    50% {
      background-position: 100% 50%;
    }

    100% {
      background-position: 0% 50%;
    }
  }

  @keyframes floating {
    0% {
      transform: translateY(0) scale(1);
    }

    50% {
      transform: translateY(-30px) scale(1.3);
    }

    100% {
      transform: translateY(0) scale(1);
    }
  }

  /* Background elements */
  .animated-particles {
    position: absolute;
    inset: 0;
    pointer-events: none;
    z-index: 1;
  }

  .particle {
    position: absolute;
    background: rgba(255, 255, 255, 0.06);
    border-radius: 50%;
    animation: floating 6s ease-in-out infinite;
  }

  .medical-cross-decor {
    position: absolute;
    color: rgba(255, 255, 255, 0.05);
    font-family: 'Inter', sans-serif;
    font-weight: 300;
    z-index: 1;
  }

  .container-wrapper {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
    max-width: 1200px;
    z-index: 10;
    gap: 4rem;
  }

  /* Left Brand Side */
  .brand-left {
    flex: 1;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    color: white;
  }

  .product-name h2 {
    margin: 0;
    font-size: 40px;
    font-weight: 800;
    line-height: 1.2;
  }

  .product-name p {
    margin: 0;
    font-size: 24px;
    font-weight: 400;
    text-transform: uppercase;
    letter-spacing: 2px;
  }

  .heading-main {
    margin: 0;
    font-size: 48px;
    font-weight: 700;
    line-height: 1.2;
  }

  .heading-main .highlight {
    color: #26C6A0;
  }

  .product-description {
    font-size: 24px;
    color: rgba(255, 255, 255, 0.7);
    line-height: 1.5;
  }

  /* Right Login Form */
  .login-form-right {
    flex: 0 0 418px;
    background: rgba(255, 255, 255, 0.97);
    box-shadow: 0px 24px 80px rgba(0, 0, 0, 0.25);
    border-radius: 28px;
    backdrop-filter: blur(10px);
    padding: 3rem;
    display: flex;
    flex-direction: column;
  }

  .login-form-right h3 {
    margin: 0 0 0.5rem 0;
    color: #2D3748;
    font-size: 26px;
    font-weight: 700;
    text-align: center;
  }

  .login-form-right>p {
    margin: 0 0 2rem 0;
    color: #4A5568;
    font-size: 14px;
    text-align: center;
  }

  .form-group {
    margin-bottom: 1.5rem;
    position: relative;
  }

  .form-group label {
    display: block;
    color: #2D3748;
    font-size: 13px;
    font-weight: 600;
    margin-bottom: 0.5rem;
  }

  .input-container {
    position: relative;
    width: 100%;
  }

  .input-container input {
    width: 100%;
    height: 47px;
    background: white;
    border: 1px solid #E5E7EB;
    border-radius: 12px;
    padding-left: 45px;
    font-size: 15px;
    color: #2D3748;
    outline: none;
    transition: border-color 0.2s;
  }

  .input-container input:focus {
    border-color: #1565C0;
  }

  .input-container input::placeholder {
    color: rgba(45, 55, 72, 0.40);
  }

  .input-container svg {
    position: absolute;
    left: 15px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
  }

  .options-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
  }

  .remember-group {
    display: flex;
    align-items: center;
    gap: 8px;
    cursor: pointer;
  }

  .remember-group input[type="checkbox"] {
    width: 16px;
    height: 16px;
    appearance: none;
    -webkit-appearance: none;
    border-radius: 4px;
    border: 1px solid #1461B6;
    background: white;
    cursor: pointer;
    margin: 0;
    position: relative;
  }

  .remember-group input[type="checkbox"]:checked {
    background: #1461B6;
    border-color: #1461B6;
  }

  .remember-group input[type="checkbox"]:checked::after {
    content: "✓";
    color: white;
    font-size: 12px;
    position: absolute;
    left: 2px;
    top: -1px;
    font-weight: bold;
  }

  .remember-group span {
    color: #4A5568;
    font-size: 13px;
  }

  .link-forgot-password a {
    color: #0B4F8A;
    font-size: 13px;
    font-weight: 500;
    text-decoration: none;
  }

  .button-submit {
    width: 100%;
    height: 47px;
    background: linear-gradient(172deg, #0B4F8A 0%, #1565C0 100%);
    box-shadow: 0px 4px 20px rgba(11, 79, 138, 0.35);
    border-radius: 12px;
    border: none;
    color: white;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.1s, box-shadow 0.2s;
  }

  .button-submit:active {
    transform: scale(0.98);
  }

  /* Responsive */
  @media (max-width: 992px) {
    .container-wrapper {
      flex-direction: column;
      justify-content: center;
      text-align: center;
      gap: 2rem;
    }

    .brand-left {
      align-items: center;
    }

    .product-description {
      font-size: 18px;
    }

    .heading-main {
      font-size: 36px;
    }
  }

  @media (max-width: 480px) {
    .login-form-right {
      width: 100%;
      flex: 1 1 auto;
      padding: 2rem;
    }

    .product-name h2 {
      font-size: 32px;
    }

    .product-name p {
      font-size: 18px;
    }

    .heading-main {
      font-size: 28px;
    }

    .product-description {
      font-size: 16px;
    }
  }
</style>

<div class="background">
  <!-- Decor -->
  <div class="medical-cross-decor" style="font-size: 120px; left: 5%; top: 10%;">✚</div>
  <div class="medical-cross-decor" style="font-size: 60px; left: 2%; top: 60%;">✚</div>
  <div class="medical-cross-decor" style="font-size: 80px; right: 5%; top: 20%;">✚</div>

  <div class="animated-particles">
    <!-- Reusing some particles but placed randomly using percentages to be responsive -->
    <div class="particle" style="width: 15px; height: 15px; left: 80%; top: 10%;"></div>
    <div class="particle" style="width: 26px; height: 26px; left: 20%; top: 5%;"></div>
    <div class="particle" style="width: 33px; height: 33px; left: 50%; top: 15%;"></div>
    <div class="particle" style="width: 60px; height: 60px; left: 10%; top: 80%;"></div>
    <div class="particle" style="width: 16px; height: 16px; left: 3%; top: 40%;"></div>
    <div class="particle" style="width: 45px; height: 45px; left: 30%; top: 60%;"></div>
    <div class="particle" style="width: 52px; height: 52px; left: 45%; top: 85%;"></div>
    <div class="particle" style="width: 37px; height: 37px; left: 60%; top: 40%;"></div>
    <div class="particle" style="width: 68px; height: 68px; left: 90%; top: 70%;"></div>
    <div class="particle" style="width: 53px; height: 53px; left: 75%; top: 90%;"></div>
  </div>

  <div class="container-wrapper">
    <div class="brand-left">
      <div class="product-name">
        <h2>VSahha</h2>
        <p>International Health Solutions</p>
      </div>
      <div class="heading-main">
        The Future of<br />
        <span class="highlight">Health Insurance</span><br />
        Management
      </div>
      <div class="product-description">
        A complete CRM platform for managing insurance<br />
        policies, partners, members, and coverage —<br />
        built for modern health operations.
      </div>
    </div>

    <div class="login-form-right">
      <form method="POST" action="{{ route('login.post') }}">
        @csrf

        <h3>Welcome</h3>
        <p>Sign in to your VSahha dashboard</p>

        <div class="form-group">
          <label>Email address</label>
          <div class="input-container">
            <input type="email" name="email" placeholder="admin@vsahha.com" value="{{ old('email') }}" required>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path
                d="M15 3H3C2.175 3 1.5 3.675 1.5 4.5V13.5C1.5 14.325 2.175 15 3 15H15C15.825 15 16.5 14.325 16.5 13.5V4.5C16.5 3.675 15.825 3 15 3Z"
                stroke="#9CA3AF" stroke-width="1.5" />
              <path d="M1.5 4.5L9 9.75L16.5 4.5" stroke="#9CA3AF" stroke-width="1.5" />
            </svg>
          </div>
        </div>

        <div class="form-group">
          <label>Password</label>
          <div class="input-container">
            <input type="password" name="password" placeholder="Password" required>
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
              <path
                d="M3.75 8.25H14.25C15.0784 8.25 15.75 8.92157 15.75 9.75V15C15.75 15.8284 15.0784 16.5 14.25 16.5H3.75C2.92157 16.5 2.25 15.8284 2.25 15V9.75C2.25 8.92157 2.92157 8.25 3.75 8.25Z"
                stroke="#9CA3AF" stroke-width="1.5" />
              <path
                d="M12.75 8.25V5.25C12.75 4.25544 12.3549 3.30161 11.6517 2.59835C10.9484 1.89509 9.99456 1.5 9 1.5C8.00544 1.5 7.05161 1.89509 6.34835 2.59835C5.64509 3.30161 5.25 4.25544 5.25 5.25V8.25"
                stroke="#9CA3AF" stroke-width="1.5" />
            </svg>
          </div>
        </div>

        <div class="options-row">
          <label class="remember-group">
            <input type="checkbox" name="remember">
            <span>Remember me</span>
          </label>
          <div class="link-forgot-password">
            <a href="#">Forgot password?</a>
          </div>
        </div>

        <button type="submit" class="button-submit">
          Sign in to Dashboard
        </button>
      </form>
    </div>
  </div>
</div>