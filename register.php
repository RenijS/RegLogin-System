<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register page</title>
    <style>
      div.register-container {
        border: 1px solid black;
        border-radius: 12px;
        padding: 0 2rem;
        padding-bottom: 1.5rem;
        width: max-content;
        margin: auto;
      }
      .register-container .title-container {
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
      .name-container {
        display: flex;
        gap: 0.5rem;
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
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .password-container input[type="password"] {
        flex: 1;
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
        const firstName = document.querySelector(".firstName-input");
        const lastName = document.querySelector(".lastName-input");
        const email = document.querySelector(".email-input");
        const password = document.querySelector(".password-input");
        const confirmPassword = document.querySelector(
          ".confirm_password-input"
        );

        if (!firstName || firstName.value.trim() === "") {
          errorMsg = "Please enter first name";
          return false;
        }

        if (!lastName || lastName.value.trim() === "") {
          errorMsg = "Please enter last name";
          return false;
        }

        if (!email || email.value.trim() === "") {
          errorMsg = "Please enter email";
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

        if (confirmPassword.value !== password.value) {
          errorMsg = "Passwords doesn't match.";
          return false;
        }

        errorMsg ="";
        return true;
      }

      const handleSubmit = (e) =>{
        if(!errorChecker()){
          //output error
          e.preventDefault();
          const errorContainer = document.querySelector(".error-container");
          errorContainer.textContent = errorMsg;
        }
      }
    </script>
  </head>
  <body>
    <div class="register-container">
      <div class="title-container">
        <span class="back-btn" onclick="window.history.go(-1); return false;">
          <
        </span>
        <h2>Registration</h2>
      </div>
      <form action="" method="post" class="register-form">
        <div class="error-container"></div>
        <div class="name-container">
          <div class="input-row">
            <label for="firstNmae">First Name</label>
            <input
              type="text"
              name="firstName"
              id="firstName"
              placeholder="enter your first name"
              class="firstName-input"
              required
            />
          </div>
          <div class="input-row">
            <label for="lastName">Last Name</label>
            <input
              type="text"
              name="lastName"
              id="lastName"
              placeholder="enter your last name"
              class="lastName-input"
              required
            />
          </div>
        </div>
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
        <div class="input-row">
          <label for="confirm-password">Confirm Password</label>
          <div class="password-container">
            <input
              type="password"
              name="confirm-password"
              id="confirm-password"
              placeholder="enter your password"
              class="confirm_password-input"
              required
            />
            <span class="show-btn">show</span>
          </div>
        </div>
        <button class="register-btn" type="submit" onclick="handleSubmit(event)">Register</button>
      </form>
    </div>
  </body>
</html>
