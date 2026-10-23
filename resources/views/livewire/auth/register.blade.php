<div class="min-h-screen bg-[#0F172A]">

    <div class="grid min-h-screen lg:grid-cols-2">

        {{-- LEFT SIDE --}}
        <div
            class="relative hidden overflow-hidden border-r border-white/5 bg-[#0B1220] lg:flex lg:flex-col lg:justify-between"
        >

            <div
                class="absolute -left-32 -top-32 h-96 w-96 rounded-full bg-indigo-600/20 blur-3xl"
            ></div>

            <div
                class="absolute -bottom-32 -right-32 h-96 w-96 rounded-full bg-blue-600/10 blur-3xl"
            ></div>


            {{-- Branding --}}
            <div class="relative z-10 p-12">

                <a
                    href="{{ url('/') }}"
                    class="inline-flex items-center gap-3"
                >

                    <div
                        class="flex h-11 w-11 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-blue-600 shadow-lg shadow-indigo-500/20"
                    >
                        <svg
                            class="h-6 w-6 text-white"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 3l8 4.5v9L12 21l-8-4.5v-9L12 3z"
                            />

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                stroke-width="2"
                                d="M12 12l8-4.5M12 12L4 7.5M12 12v9"
                            />
                        </svg>
                    </div>

                    <div>
                        <h1 class="text-xl font-bold tracking-tight">
                            Inventory<span class="text-indigo-400">Pro</span>
                        </h1>

                        <p class="text-xs text-slate-500">
                            Smart Inventory & Billing
                        </p>
                    </div>

                </a>

            </div>


            {{-- Main content --}}
            <div class="relative z-10 px-12 pb-12">

                <div class="max-w-xl">

                    <p
                        class="mb-4 text-sm font-medium uppercase tracking-[0.2em] text-indigo-400"
                    >
                        Get Started
                    </p>

                    <h2
                        class="text-4xl font-bold leading-tight text-white xl:text-5xl"
                    >
                        Build a smarter
                        <span
                            class="bg-gradient-to-r from-indigo-400 to-blue-400 bg-clip-text text-transparent"
                        >
                            business.
                        </span>
                    </h2>

                    <p
                        class="mt-6 max-w-lg text-base leading-7 text-slate-400"
                    >
                        Everything you need to manage inventory, sales,
                        purchases and customers in one powerful platform.
                    </p>


                    {{-- Features --}}
                    <div class="mt-10 space-y-5">

                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-indigo-500/10"
                            >
                                📦
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-200">
                                    Smart Inventory Management
                                </h3>

                                <p class="mt-1 text-xs text-slate-500">
                                    Track your products and stock easily.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-blue-500/10"
                            >
                                🧾
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-200">
                                    Fast Billing
                                </h3>

                                <p class="mt-1 text-xs text-slate-500">
                                    Create sales and invoices quickly.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-purple-500/10"
                            >
                                📊
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-200">
                                    Business Reports
                                </h3>

                                <p class="mt-1 text-xs text-slate-500">
                                    Understand your business performance.
                                </p>
                            </div>

                        </div>


                        <div class="flex items-center gap-4">

                            <div
                                class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-emerald-500/10"
                            >
                                🤖
                            </div>

                            <div>
                                <h3 class="text-sm font-semibold text-slate-200">
                                    AI Assistant
                                </h3>

                                <p class="mt-1 text-xs text-slate-500">
                                    Get intelligent business insights.
                                </p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>


            {{-- Footer --}}
            <div
                class="relative z-10 flex items-center justify-between px-12 pb-8 text-xs text-slate-600"
            >
                <span>
                    © {{ date('Y') }} InventoryPro
                </span>

                <span>
                    Version 1.0.0
                </span>
            </div>

        </div>


        {{-- RIGHT SIDE --}}
        <div
            class="flex min-h-screen items-center justify-center px-5 py-10 sm:px-8 lg:px-12"
        >

            <div class="w-full max-w-md">

                {{-- Mobile Logo --}}
                <div class="mb-10 flex items-center gap-3 lg:hidden">

                    <div
                        class="flex h-10 w-10 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-500 to-blue-600"
                    >
                        <span class="text-lg">◈</span>
                    </div>

                    <div>
                        <h1 class="font-bold">
                            Inventory<span class="text-indigo-400">Pro</span>
                        </h1>

                        <p class="text-xs text-slate-500">
                            Smart Inventory & Billing
                        </p>
                    </div>

                </div>


                {{-- Register Card --}}
                <div
                    class="rounded-2xl border border-white/5 bg-[#111827]/80 p-6 shadow-2xl shadow-black/20 backdrop-blur-xl sm:p-8"
                >

                    {{-- Header --}}
                    <div class="mb-8">

                        <div class="mb-6 flex items-center justify-between">

                            <div
                                class="flex h-11 w-11 items-center justify-center rounded-xl bg-indigo-500/10 text-indigo-400"
                            >
                                <svg
                                    class="h-5 w-5"
                                    fill="none"
                                    stroke="currentColor"
                                    viewBox="0 0 24 24"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M18 9v6m3-3h-6M9 7a4 4 0 100 8 4 4 0 000-8z"
                                    />
                                </svg>
                            </div>

                            <p class="text-sm text-slate-500">
                                Already have an account?

                                <a
                                    href="{{ route('login') }}"
                                    class="font-medium text-indigo-400 transition hover:text-indigo-300"
                                >
                                    Sign in
                                </a>
                            </p>

                        </div>


                        <h2 class="text-2xl font-bold text-white">
                            Create your account
                        </h2>

                        <p class="mt-2 text-sm text-slate-500">
                            Get started with InventoryPro today.
                        </p>

                    </div>


                    {{-- Form --}}
                    <form
                        wire:submit="register"
                        class="space-y-5"
                    >

                        {{-- Name --}}
                        <div>

                            <label
                                for="name"
                                class="mb-2 block text-sm font-medium text-slate-300"
                            >
                                Full Name
                            </label>

                            <input
                                id="name"
                                type="text"
                                wire:model="name"
                                placeholder="Enter your full name"
                                autocomplete="name"
                                class="w-full rounded-xl border border-slate-700 bg-[#0B1220] px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
                            >

                            @error('name')
                                <p class="mt-2 text-xs text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Email --}}
                        <div>

                            <label
                                for="email"
                                class="mb-2 block text-sm font-medium text-slate-300"
                            >
                                Email Address
                            </label>

                            <input
                                id="email"
                                type="email"
                                wire:model="email"
                                placeholder="you@example.com"
                                autocomplete="email"
                                class="w-full rounded-xl border border-slate-700 bg-[#0B1220] px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
                            >

                            @error('email')
                                <p class="mt-2 text-xs text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Password --}}
                        <div>

                            <label
                                for="password"
                                class="mb-2 block text-sm font-medium text-slate-300"
                            >
                                Password
                            </label>

                            <input
                                id="password"
                                type="password"
                                wire:model="password"
                                placeholder="Minimum 8 characters"
                                autocomplete="new-password"
                                class="w-full rounded-xl border border-slate-700 bg-[#0B1220] px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
                            >

                            @error('password')
                                <p class="mt-2 text-xs text-red-400">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        {{-- Confirm Password --}}
                        <div>

                            <label
                                for="password_confirmation"
                                class="mb-2 block text-sm font-medium text-slate-300"
                            >
                                Confirm Password
                            </label>

                            <input
                                id="password_confirmation"
                                type="password"
                                wire:model="password_confirmation"
                                placeholder="Confirm your password"
                                autocomplete="new-password"
                                class="w-full rounded-xl border border-slate-700 bg-[#0B1220] px-4 py-3 text-sm text-white outline-none transition placeholder:text-slate-600 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-500/10"
                            >

                        </div>


                        {{-- Terms --}}
                        <div class="flex items-start gap-3">

                            <input
                                id="terms"
                                type="checkbox"
                                required
                                class="mt-0.5 h-4 w-4 rounded border-slate-700 bg-[#0B1220] text-indigo-500 focus:ring-indigo-500/20"
                            >

                            <label
                                for="terms"
                                class="text-xs leading-5 text-slate-500"
                            >
                                I agree to the
                                <a
                                    href="#"
                                    class="text-indigo-400 hover:text-indigo-300"
                                >
                                    Terms of Service
                                </a>
                                and
                                <a
                                    href="#"
                                    class="text-indigo-400 hover:text-indigo-300"
                                >
                                    Privacy Policy
                                </a>.
                            </label>

                        </div>


                        {{-- Register --}}
                        <button
                            type="submit"
                            wire:loading.attr="disabled"
                            class="flex w-full items-center justify-center gap-2 rounded-xl bg-gradient-to-r from-indigo-600 to-blue-600 px-4 py-3.5 text-sm font-semibold text-white shadow-lg shadow-indigo-600/20 transition hover:from-indigo-500 hover:to-blue-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/40 disabled:cursor-not-allowed disabled:opacity-60"
                        >

                            <span wire:loading.remove>
                                Create Account
                            </span>

                            <span
                                wire:loading
                                class="flex items-center gap-2"
                            >
                                <svg
                                    class="h-4 w-4 animate-spin"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                >
                                    <circle
                                        class="opacity-25"
                                        cx="12"
                                        cy="12"
                                        r="10"
                                        stroke="currentColor"
                                        stroke-width="4"
                                    ></circle>

                                    <path
                                        class="opacity-75"
                                        fill="currentColor"
                                        d="M4 12a8 8 0 018-8v4a4 4 0 00-4 4H4z"
                                    ></path>
                                </svg>

                                Creating account...
                            </span>

                            <span wire:loading.remove>
                                →
                            </span>

                        </button>

                    </form>


                    {{-- Bottom --}}
                    <div class="mt-8 border-t border-white/5 pt-6 text-center">

                        <p class="text-xs text-slate-600">
                            Your information is securely stored and protected.
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>