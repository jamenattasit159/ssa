<!DOCTYPE html>
<html lang="en" data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.2/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
    <style>
        .custom-width {
            max-width: 1000px;
            /* หรือความกว้างที่คุณต้องการ */
        }
    </style>
</head>

<body>
    <center>
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>



            <!-- <div class="hero-content flex-col lg:flex-row-reverse w-full"> -->
            <div class="text-center lg:text-left">
            </div>
            <div class="card shrink-0 w-full max-w-3xl shadow-2xl bg-base-100">
                <form class="card-body">
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="email" placeholder="email" class="input input-bordered" required />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" required />
                        <label class="label">
                            <!-- <a href="#" class="label-text-alt link link-hover">Forgot password?</a> -->
                        </label>
                    </div>
                    <div class="form-control mt-6">
                        <button
                            class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Login</button><br>
                        <!-- <center><a href="#" class="label-base-text-alt link link-hover"  style="color: red;">สมัครสมาชิก !!</a></center> -->
                        <a href="register.php" class="link link-hover ">ลงทะเบียนประชาชนทั่วไป</a>
                        <a href="registerka.php" class="link link-hover ">ลงทะเบียนหน่วยราชการ</a>
                        <a href="registercompany.php" class="link link-hover ">ลงทะเบยีนโรงงาน / เอกชน</a>
    </center>
    </div>
    </form>
    </div>
    <!-- </div> -->

    </div>


</body>

</html>