<x-authLayout>
    <div class="register-header">
        <div class="register-header_title">
            <h1>fakeface</h1>
            <h3>Create a new account</h3>
            <p>Its quick and easy.</p>
        </div>
        @if ($errors->has('msg'))
            <div class="error-message">
                {{ $errors->first('msg') }}
            </div>
        @endif

        <div class="register-header_body">
            <form action="/register" method="POST">
                @csrf
                <input autofocus type="text" placeholder="First name" name="firstname" id="firstname" class="input">
                <input type="text" placeholder="Last name" name="lastname" id="lastname" class="input">
                <label for="birthdate" class="row"><small>Birthday</small></label>
                <input type="date" name="birthdate" id="birthdate" class="input"
                    value="{{ now()->format('Y-m-d') }}">
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
                <input type="text" name="emailaddress" placeholder="Email address" class="emailaddress input">
                <input type="password" name="password" placeholder="New password" class="password input">
                <button class="row">Sign up</button>
            </form>
        </div>
    </div>
</x-authLayout>
