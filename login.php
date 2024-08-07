<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
    <style>
      div.login-container {
        border: 1px solid black;
        border-radius: 12px;
        padding: 0 2rem;
        padding-bottom: 1.5rem;
        width: max-content;
        margin: auto;
      }
      .login-container .title-container {
        display: flex;
        align-items: center;
        gap: 1rem;
        margin: 1rem 0;
      }

      .title-container h2 {
        margin: 0;
      }

      .title-container .back-btn {
        border: 2px solid black;
        padding: 0.1rem 0.4rem;
        border-radius: 50%;
        font-weight: bold;
      }
      form {
        display: flex;
        flex-direction: column;
        gap: 0.8rem;
      }
      .input-row {
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
      }

      .input-row input {
        font-size: medium;
        padding: 0.5rem 1rem;
        border-radius: 10px;
        border: 1px solid gray;
      }

      .password-container {
        border: 1px solid gray;
        border-radius: 10px;
        height: max-content;
      }

      .password-container input[type="password"] {
        border: 0;
      }

      .password-container .show-btn {
        padding: 0 1rem;
        border-left: 1px solid gray;
      }

      button {
        padding: 0.5rem 2rem;
        border: 1px gray solid;
        border-radius: 12px;
        background-color: aliceblue;
      }
    </style>
    <script>
      let errorMsg = "";
      const errorChecker = () => {
        const email = document.querySelector(".email-input");
        const password = document.querySelector(".password-input");

        if (!email || email.value.trim() === "") {
          errorMsg = "Please enter email, can't be empty";
          return false;
        } else {
          if (!email.value.includes("@")) {
            errorMsg = "Please enter valid email, should contain @";
            return false;
          } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
            errorMsg = "Please enter valid email, should have valid domain";
            return false;
          }
        }

        if (!password || password.value.trim() === "") {
          errorMsg = "Please enter password, can't be empty";
          return false;
        } else {
          if (password.value.length < 8) {
            errorMsg = "Please enter valid password, can't be less than 8";
            return false;
          } else if (!/[a-zA-Z0-9!@#$%^&*]/.test(password.value)) {
            errorMsg =
              "Please enter valid password, needs to contain special chars";
            return false;
          }
        }
        errorMsg = "";
        return true;
      };
      const handleSubmit = (e) => {
        if (errorChecker()) {
          // If no errors, proceed with form submission
          // You can handle the form submission here
          e.preventDefault();
          const errorContainer = document.querySelector(".error-container");
          errorContainer.textContent = errorMsg;
        }
      };
    </script>
  </head>
  <body>
    <div class="login-container">
      <div class="title-container">
        <span class="back-btn" onclick="window.history.go(-1); return false;">
          <
        </span>
        <h2>Login</h2>
      </div>
      <div class="error-container">
        <span class="error"></span>
      </div>
      <form action="login" method="post">
        <div class="error-container"></div>
        <div class="input-row">
          <label for="email">Email-</label>
          <input
            type="email"
            name="email"
            id="email"
            placeholder="enter your email"
            class="email-input"
            required
          />
        </div>
        <div class="input-row">
          <label for="password">Password</label>
          <div class="password-container">
            <input
              type="password"
              name="password"
              id="password"
              placeholder="enter your password"
              class="password-input"
              required
            />
            <span class="show-btn">show</span>
          </div>
        </div>
        <span class="forgot_pass-btn">Forget Password?</span>
        <button class="login-btn" type="submit" onclick="handleSubmit(event)">Login</button>
      </form>
    </div>
  </body>
</html>
