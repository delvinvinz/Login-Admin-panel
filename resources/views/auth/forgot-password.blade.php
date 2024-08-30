<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Arisan</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/c577588c20.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">
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
            transform: translateY(-1rem);
            transition: opacity 0.3s ease-in-out, transform 0.3s ease-in-out;
            transition-delay: 0.1s;
        }

        .input.is-invalid + .floating-label .label-text,
        .input.is-invalid:not(:placeholder-shown) + .floating-label .label-text {
            opacity: 0;
            transform: translateY(-1rem);
        }

        .input {
            padding-top: 2rem;
            padding-bottom: 0.25rem;
        }

        .input.is-invalid {
            border-color: #dc3545;
            ring-color: #dc3545;
        }

        .invalid-feedback {
            color: #dc3545;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            text-align: left;
        }

    </style>
</head>

<body class="bg-[#F5B80F] flex items-center justify-center min-h-screen relative overflow-hidden">
    <div class="p-6 sm:p-8 rounded-lg w-full max-w-sm content relative z-10">
        <div class="flex justify-center mb-8 -mt-[70px]">
            <img src="img/Logo Ide Kite-01.jpg" alt="Company Logo" class="rounded-full drop-shadow-xl ring-1 ring-black size-32">
        </div>
        @if(session('status'))
        <div class=" text-green-500 mb-4 text-xs lg:text-sm font-semibold">
            {{ session('status') }}
        </div>
    @endif
    
    @if($errors->any())
        <div class=" text-red-500 mb-4 text-xs lg:text-sm font-semibold">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    
    <form method="POST" action="{{ route('password.email') }}" class="relative z-10 mb-8">
        @csrf
        <div class="relative mb-4">
            <input type="email" id="email" name="email" placeholder=" "
                class="@error('email') is-invalid @enderror input appearance-none rounded-2xl w-full py-2 px-3 pl-12 leading-tight focus:outline-none focus:shadow-outline ring-2 ring-black drop-shadow-md bg-[#F5B80F]"
                autocomplete="off">
            <label for="email" class="floating-label text-sm font-bold pl-10">
                <img src="img/icon_user.png" class="absolute w-[17px] h-[18px] -ml-8">
                <div class="absolute w-[2px] h-9 -mt-2 -ml-2 bg-black"></div>
                <span class="label-text">{{ __('Email') }}</span>
            </label>
        </div>
        <div class="mb-6 flex flex-col justify-start items-start">
            <p class="text-red-500 text-[0.65rem] xl:text-xs font-normal">{{ __('Masukkan email yang ingin anda ganti password*') }}</p>
        </div>
        <div class="flex items-center justify-center mt-3">
            <button type="submit" class="text-center ring-1 ring-[#0556F3] bg-[#0556F3] hover:bg-[#003bbf] text-white rounded-xl w-[130px] py-2">{{ __('Send Email') }}</button>
        </div>
    </form>
    
    </div>
    <img src="img/Wave 2.png" alt="" class="absolute bottom-0 left-0 w-full h-[300px] md:h-[320px] lg:h-[550px] lg:-mb-10 z-0">
</body>
</html>

