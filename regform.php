<html>
<head>
    <title>Student Registration Form</title>
    <script>
        function validateregForm() {
            var firstName = document.regForm.firstName.value;
            var lastName = document.regForm.lastName.value;
            var email = document.regForm.email.value;
            var mobile = document.regForm.mobile.value;
            var namePattern = /^[A-Za-z]+$/;

            if (firstName == "") {
                alert("Enter First Name!");
                document.regForm.firstName.focus();
                return false;
            } else if (!namePattern.test(firstName)) {
                alert("Enter a valid First Name (letters only)!");
                document.regForm.firstName.focus();
                return false;
            }

            if (lastName != "" && !namePattern.test(lastName)) {
                alert("Enter a valid Last Name (letters only)!");
                document.regForm.lastName.focus();
                return false;
            }

            if (email == "") {
                alert("Enter Email ID!");
                document.regForm.email.focus();
                return false;
            }

            if (mobile == "") {
                alert("Enter Mobile Number!");
                document.regForm.mobile.focus();
                return false;
            } else if (isNaN(mobile)) {
                alert("Enter a valid Mobile Number (digits only)!");
                document.regForm.mobile.focus();
                return false;
            } else if (mobile.length != 10) {
                alert("Enter a 10-digit Mobile Number!");
                document.regForm.mobile.focus();
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h2 style="text-align:center;">STUDENT REGISTRATION FORM</h2>
    <form name="regForm" onsubmit="return validateregForm()">
        <table align="center" border="1" cellpadding="10">
            <tr>
                <td>FIRST NAME</td>
                <td><input type="text" name="firstName" maxlength="30">(max 30 Characters)</td>
            </tr>
            <tr>
                <td>LAST NAME</td>
                <td><input type="text" name="lastName" maxlength="30">(max 30 Characters)</td>
            </tr>
            <tr>
                <td>EMAIL-ID</td>
                <td><input type="email" name="email"></td>
            </tr>
            <tr>
                <td>MOBILE NUMBER</td>
                <td><input type="text" name="mobile" maxlength="10">(10 digit number)</td>
            </tr>
            <tr>
                <td colspan="2">
                    <center>
                        <input type="submit" value="SUBMIT">
                        <input type="reset" value="RESET">
                    </center>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
