<x-authLayout>
    <div class="register-header">
        <div class="register-header_title">
            <h1>fakeface</h1>
            <h3>Create a new account</h3>
            <p>Its quick and easy.</p>
        </div>
        <div class="register-header_body">
            <form action="#" method="POST">
                <input type="text" placeholder="First name" name="firstname" id="firstname" class="input">
                <input type="text" placeholder="Last name" name="lastname" id="lastname" class="input">
                <label for="birthdate" class="row"><small>Birthday</small></label>
                <input type="date" name="birthdate" id="birthdate" class="input">
                <fieldset>
                    <legend class="row"><small>Gender</small></legend>
                    <div>
                        <label for="female">Female</label>
                        <input type="radio" name="gender" value="female" id="female">
                    </div>
                    <div>
                        <label for="male">Male</label>
                        <input type="radio" name="gender" value="male" id="male">
                    </div>
                </fieldset>
                <button class="row">Sign up</button>
                <input type="text" name="emailaddress" placeholder="Email address" class="emailaddress input">
                <input type="password" name="password" placeholder="New password" class="password input">
            </form>
        </div>
    </div>
</x-authLayout>
