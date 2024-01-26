@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

<div class="container mx-auto mt-8 mb-16 py-8">
    <h2 class="text-4xl font-bold mb-6 text-center">Contact Us</h2>

    <!-- Description -->
    <div class="mb-6">
        <p>IWe're here to assist you with any questions, concerns, or inquiries you may have. Whether you're seeking help with
            technical issues, have queries about our quizzes, or simply want to connect with us, our dedicated support team is
            ready to provide prompt and helpful assistance.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
        <!-- Contact Information -->
        <div class="bg-white p-6 rounded-lg shadow-md relative text-lg" style="width: 100%;">
            <h3 class="text-3xl font-semibold mb-8 text-center">Contact Information</h3>
            <p class="mb-2"><strong>Address:</strong> Rua Asdrubalino Matumbino de Santo Carlos Almeida, lote 15, Barreiro, Portugal</p>
            <p class="mb-2"><strong>Service Hours:</strong> Mondays to Fridays, 9:00 AM - 5:00 PM</p>
            <p class="mb-2"><strong>Phone:</strong> +351 962 464 843   OR   21 206 81 85</p>
            <p class="mb-2"><strong>Email:</strong> pootisquizapp@gmail.com</p>
            <p class="mb-2"><strong>Fax:</strong> +163 466 193</p>
            <p class="mb-2"><strong>Facebook:</strong> <a href="https://m.facebook.com/TeamFortress2/" target="_blank" class="text-blue-500 hover:underline">Team Fortress 2</a></p>
            <p class="mb-2"><strong>Twitter:</strong> <a href="https://twitter.com/TeamFortress" target="_blank" class="text-blue-500 hover:underline">Team Fortress 2</a></p>
        </div>

        <!-- Map with Fixed Marker -->
        <div class="bg-white p-6 rounded-lg shadow-md relative" style="width: 100%;">
            <h3 class="text-xl font-medium mb-4 text-center">Rua Asdrubalino Matumbino de Santo Carlos Almeida, lote 15 </h3>
            <!-- Use an image instead of an interactive map -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d825.1603370560655!2d-9.078155630348451!3d38.66288980484657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd19364242c25f1f%3A0x3576f5c73f2b9e38!2sR.%20Prof.%20Egas%20Moniz%2032%2C%202830-379%20Barreiro!5e0!3m2!1spt-PT!2spt!4v1705786059949!5m2!1spt-PT!2spt" width="570" height="370" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

</body>

</html>
@endsection
