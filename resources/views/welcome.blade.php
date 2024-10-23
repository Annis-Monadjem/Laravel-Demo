<x-authLayout>
    <div class="sign-header">
        <div class="sign-header_title">
            <h1>fakeface</h1>
            <h3>Connect with friends and the world around you on Fakeface.</h3>
        </div>
        <div class="sign-header_body">
            <form action="#" method="POST">
                @csrf
                <label for="email"></label>
                <input autofocus type="text" placeholder="Email address" name="email" id="email" class="input">

                <label for="password"></label>
                <input type="password" placeholder="Password" name="password" id="password" class="input">

                <button type="submit" class="button">Log In</button>
            </form>
            <a href="#">Forgot Password?</a>
            <a href="/register" class="button">Create new account</a>
        </div>
    </div>
</x-authLayout>
