<!DOCTYPE html>
<html>
<head>
    <title>HisabFlow Pricing</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

    <div class="text-center py-10">
        <h1 class="text-4xl font-bold">HisabFlow Pricing</h1>
        <p class="text-gray-600 mt-2">Simple pricing. No hidden fees.</p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-10">

        @foreach($plans as $plan)
            <div class="bg-white p-6 rounded-xl shadow-lg text-center hover:scale-105 transition">

                <h2 class="text-2xl font-bold">{{ $plan->name }}</h2>

                <p class="text-3xl mt-4">
                    ${{ $plan->price }}
                    <span class="text-sm">/{{ $plan->interval }}</span>
                </p>

                <p class="mt-2 text-gray-500">
                    {{ $plan->project_limit }} Projects
                </p>

                @auth
                <form action="{{ route('choose.plan') }}" method="POST">
                    @csrf
                    <input type="hidden" name="plan_id" value="{{ $plan->id }}">
                    
                    <button class="mt-6 bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">
                        Choose Plan
                    </button>
                </form>
                @else
                    <a href="/login" class="mt-6 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg">
                        Login to Choose
                    </a>
                @endauth

            </div>
        @endforeach

    </div>

</body>
</html>