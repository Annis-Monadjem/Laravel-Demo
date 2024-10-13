<x-authLayout>
    <div class="sign_header">
        <div class="sign_title">
            <h1>fakeface</h1>
            <h3>Connect with friends and the world around you on Fakeface.</h3>
        </div>
        <div class="sign_body">
            <form action="#" method="POST">
                <div>
                    <label for="email" />
                    <input type="text" placeholder="Email or phone number" name="email" id="email">
                </div>
                <div>
                    <label for="password" />
                    <input type="password" placeholder="Password" name="password" id="password">
                </div>

                <button type="submit">Log In</button>
            </form>
            <p><a href="#" class="btn-plain">Forgot Password?</a></p>

            <a href="/register"><button>Create new account</button></a>
        </div>
    </div>
</x-authLayout>
