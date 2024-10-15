<x-authLayout>
    <div class="sign-header">
        <div class="sign-header_title">
            <h1>fakeface</h1>
            <h3>Connect with friends and the world around you on Fakeface.</h3>
        </div>
        <div class="sign-header_body">
            <form action="#" method="POST">
                <label for="email"></label>
                <input type="text" placeholder="Email or phone number" name="email" id="email">

                <label for="password"></label>
                <input type="password" placeholder="Password" name="password" id="password">

                <button type="submit">Log In</button>
            </form>
            <a href="#">Forgot Password?</a>
            <a href="/register" class="btn">Create new account</a>
        </div>
    </div>
</x-authLayout>
