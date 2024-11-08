<?= loadPartial('head') ?>
<?= loadPartial('navbar') ?>
<?= loadPartial('top-banner') ?>

<section class="text-center mt-4">
    <div class="container mx-auto p-4">
        <h2 class="text-3xl font-bold mb-4">Welcome to the Professor Evaluation System</h2>
        <p class="text-lg text-gray-700 mb-6">
            This platform allows students to review and evaluate their professors based on various criteria. 
            You can leave feedback, view ratings, and make informed decisions about courses and professors.
        </p>
        <p class="text-lg text-gray-700 mb-6">
            Please log in to access the reviews and contribute your feedback!
        </p>
        
        <!-- Login Buttons -->
        <div class="flex justify-center gap-4">
            <a href="/auth/login-user" class="text-white bg-blue-500 hover:bg-blue-600 px-6 py-3 rounded-lg shadow-lg text-lg">
                User Login
            </a>
            <a href="/auth/login-staff" class="text-white bg-green-500 hover:bg-green-600 px-6 py-3 rounded-lg shadow-lg text-lg">
                Staff Login
            </a>
        </div>
    </div>
</section>

<?= loadPartial('bottom-banner') ?>
<?= loadPartial('footer') ?>
