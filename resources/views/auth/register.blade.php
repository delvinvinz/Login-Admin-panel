<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Arisan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
    <script src="https://kit.fontawesome.com/1883c0af25.js" crossorigin="anonymous"></script>
    <link rel="icon" href="img/Logo Ide Kite-01.jpg">
    <style>
        body {
            font-family: "Balsamiq Sans", sans-serif;
        }

        .floating-label {
            position: absolute;
            top: 50%;
            left: 0.5rem;
            transform: translateY(-50%);
            padding: 0 0.3rem;
            pointer-events: none;
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
        }

        .input:focus + .floating-label .label-text,
        .input:not(:placeholder-shown) + .floating-label .label-text {
            opacity: 0;
            transform: translateY(-1rem); /* Memindahkan teks ke atas saat menghilang */
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            transition-delay: 0.1s;
        }

        .input {
            padding-top: 2rem;
            padding-bottom: 0.25rem;
        }

        .relative .is-invalid ~ .floating-label img,
        .relative .is-invalid ~ .floating-label .line {
            top: -13px; /* Sesuaikan jarak agar mengikuti pesan error */
        }

        .relative .is-invalid ~ .floating-label span.line {
            margin-top: -14px; /* Sesuaikan posisi teks */
            position: relative; /* Pastikan hanya teks yang terpengaruh */
        }

        .relative .is-invalid ~ .absolute .line {
            margin-top: -20px;
        }

        .invalid-feedback {
            position: absolute;
            bottom: -20px; /* Moves the error message above the input field */
            left: 1rem; /* Adjusts the horizontal position */
            color: red;
            font-size: 0.875rem;
            font-weight: bold;
            z-index: 20;
        }

        .input.is-invalid {
            margin-bottom: 25px; /* Menambahkan jarak bawah ketika ada error */
        }

    </style>
</head>

<body class="bg-[#F5B80F] flex items-center justify-center min-h-screen">
    <div class="p-6 sm:p-8 rounded-lg w-full max-w-sm content">
        <div class="flex justify-center mb-8 -mt-[70px]">
            <img src="img/Logo Ide Kite-01.jpg" alt="Company Logo" class="rounded-full shadow-md ring-1 ring-black h-28 w-28">
        </div>
        <form method="POST" action="{{ route('register') }}" class="relative z-10">
            @csrf
            <div class="relative mb-5">
                <input autocomplete="off" type="text" id="name" name="name" placeholder=" " value="{{ old('name') }}" required autocomplete="name"
                    class="form-input @error('name') is-invalid @enderror input appearance-none rounded-2xl w-full py-2 px-3 pl-12 leading-tight focus:outline-none focus:shadow-outline ring-2 ring-black drop-shadow-md bg-[#F5B80F]">
                <label for="name" class="floating-label text-sm font-bold pl-10">
                    <img src="img/padlock_name.png" class="absolute w-[29px] h-[20px] -ml-10">
                    <div class="line absolute w-[2px] h-9 -mt-2 -ml-2 bg-black"></div>
                    <span class="line label-text">{{ __('Nama Lengkap') }}</span>
                </label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>


            <div class="relative mb-5">
                <input autocomplete="off" type="email" id="email" name="email" placeholder=" " value="{{ old('email') }}" required autocomplete="email"
                    class="form-input @error('email') is-invalid @enderror input appearance-none rounded-2xl w-full py-2 px-3 pl-12 leading-tight focus:outline-none focus:shadow-outline ring-2 ring-black drop-shadow-md bg-[#F5B80F]">
                <label for="email" class="floating-label text-sm font-bold pl-10">
                    <img src="img/icon_user.png" class="absolute w-[17px] h-[18px] -ml-8">
                    <div class="line absolute w-[2px] h-9 -mt-2 -ml-2 bg-black"></div>
                    <span class="line label-text">{{ __('Email') }}</span>
                </label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="relative mb-5">
                <input type="password" autocomplete="off" id="password" name="password" placeholder=" " value="{{ old('password') }}" required autocomplete="password"
                    class="form-input @error('password') is-invalid @enderror input appearance-none rounded-2xl w-full py-2 px-3 pl-12 leading-tight focus:outline-none focus:shadow-outline ring-2 ring-black drop-shadow-md bg-[#F5B80F]">
                <label for="password" class="floating-label text-sm font-bold pl-10">
                    <img src="img/padlock.png" class="absolute w-[18px] h-[18px] -ml-8">
                    <div class="line absolute w-[2px] h-9 -mt-2 -ml-2 bg-black"></div>
                    <span class="line label-text">{{ __('Password') }}</span>
                </label>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                    <button type="button" id="togglePassword" class="focus:outline-none line">
                        <i id="eyeOpen" class="fas fa-eye text-gray-700"></i>
                        <i id="eyeClosed" class="hidden fas fa-eye-slash text-gray-700"></i>
                    </button>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            </div>

            <div class="relative mb-5">
                <input id="password-confirm" type="password" placeholder=" " name="password_confirmation" required autocomplete="new-password"
                    class="input appearance-none rounded-2xl w-full py-2 px-3 pl-12 leading-tight focus:outline-none focus:shadow-outline ring-2 ring-black drop-shadow-md bg-[#F5B80F]">
                <label for="password-confirm" class="floating-label text-sm font-bold pl-10">
                    <img src="img/padlock.png" class="absolute w-[18px] h-[18px] -ml-8">
                    <div class="absolute w-[2px] h-9 -mt-2 -ml-2 bg-black"></div>
                    <span class="label-text">{{ __('Confirm Password') }}</span>
                </label>
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                    <button type="button" id="toggleConfirmPassword" class="focus:outline-none">
                        <i id="confirmEyeOpen" class="fas fa-eye text-gray-700"></i>
                        <i id="confirmEyeClosed" class="hidden fas fa-eye-slash text-gray-700"></i>
                    </button>
                </div>
            </div>

            <div class="mb-4 flex flex-col justify-center items-center">
                @if (Route::has('login'))
                    <p class="text-black">{{ __('Udah punya akun?') }}</p>
                <a href="{{ route('login') }}" class="text-xs text-blue-700 hover:text-blue-800 font-normal underline">{{ __('Login Disini!') }}</a>
                @endif
            </div>
            <div class="flex items-center justify-center mt-3">
                <button type="submit" class="text-center ring-1 ring-[#0556F3] bg-[#0556F3] hover:bg-[#003bbf] text-white rounded-xl w-[120px] py-1">{{ __('Submit') }}</button>
            </div>
        </form>
    </div>
    <img src="img/Wave 2.png" alt="" class="absolute bottom-0 left-0 w-full h-[300px] md:h-[320px] lg:h-[550px] z-0">

    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        const eyeOpen = document.querySelector('#eyeOpen');
        const eyeClosed = document.querySelector('#eyeClosed');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            eyeOpen.classList.toggle('hidden');
            eyeClosed.classList.toggle('hidden');
        });

        const toggleConfirmPassword = document.querySelector('#toggleConfirmPassword');
        const confirmPassword = document.querySelector('#password-confirm');
        const confirmEyeOpen = document.querySelector('#confirmEyeOpen');
        const confirmEyeClosed = document.querySelector('#confirmEyeClosed');

        toggleConfirmPassword.addEventListener('click', function () {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            confirmEyeOpen.classList.toggle('hidden');
            confirmEyeClosed.classList.toggle('hidden');
        });
    </script>
</body>

</html>
