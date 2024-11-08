<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>

<div class="flex justify-center items-center min-h-screen bg-gray-100">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md mx-4">
        <h2 class="text-4xl text-center font-bold text-blue-700 mb-6">University Login</h2>

        <?= loadPartial('errors', [
            'errors' => $errors ?? []
        ]) ?>

        <form method="POST" action="/auth/login">
            <div class="mb-6">
                <input 
                    type="text" 
                    name="email" 
                    placeholder="University Email Address" 
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required 
                />
            </div>

            <div class="mb-6">
                <input 
                    type="password" 
                    name="password" 
                    placeholder="Password" 
                    class="w-full px-4 py-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" 
                    required 
                />
            </div>

            <button 
                type="submit" 
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 rounded-lg transition duration-200"
            >
                Login
            </button>

            <p class="mt-6 text-center text-gray-600">
                Don't have an account? 
                <a class="text-blue-800 font-semibold hover:underline" href="/auth/register">Register</a>
            </p>
        </form>
    </div>
</div>

<?= loadPartial('footer') ?>
