<div>
    <!-- Hero Section -->
    <div class="hero min-h-96 bg-base-200">
        <div class="hero-content text-center">
            <div class="max-w-md">
                <h1 class="text-5xl font-bold">DaisyUI v5</h1>
                <p class="py-6">Beautiful UI components for Tailwind CSS with modern design system</p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="max-w-screen-{{ config('app.screen_max_width') }} mx-auto p-8">
        <!-- Component Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
            <!-- Card Component -->
            <div class="card bg-base-100 shadow-xl">
                <figure>
                    <div class="w-full h-48 bg-gradient-to-r from-primary to-secondary"></div>
                </figure>
                <div class="card-body">
                    <h2 class="card-title">Card Component</h2>
                    <p>Beautiful cards with shadows and gradients</p>
                    <div class="card-actions justify-end">
                        <button class="btn btn-primary btn-sm">View</button>
                    </div>
                </div>
            </div>

            <!-- Stats -->
            <div class="stats shadow">
                <div class="stat">
                    <div class="stat-figure text-primary">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <div class="stat-title">Downloads</div>
                    <div class="stat-value">31K</div>
                    <div class="stat-desc">Jan 1st - Feb 1st</div>
                </div>
            </div>

            <!-- Form Elements -->
            <div class="card bg-base-100 shadow-xl">
                <div class="card-body">
                    <h2 class="card-title">Form Elements</h2>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Email</span>
                        </label>
                        <input type="text" placeholder="email@example.com" class="input input-bordered" />
                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>
                        <input type="password" placeholder="password" class="input input-bordered" />
                    </div>
                    <div class="form-control mt-4">
                        <button class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Buttons Section -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Buttons</h2>
            <div class="flex flex-wrap gap-2">
                <button class="btn">Default</button>
                <button class="btn btn-primary">Primary</button>
                <button class="btn btn-secondary">Secondary</button>
                <button class="btn btn-accent">Accent</button>
                <button class="btn btn-ghost">Ghost</button>
                <button class="btn btn-link">Link</button>
            </div>
        </div>

        <!-- Alerts -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Alerts</h2>
            <div class="space-y-4">
                <div class="alert alert-info">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>This is an info alert</span>
                </div>
                <div class="alert alert-success">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Operation completed successfully!</span>
                </div>
                <div class="alert alert-warning">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L4.732 14.5c-.77.833.192 2.5 1.732 2.5z"></path>
                    </svg>
                    <span>Warning: Please check your settings</span>
                </div>
                <div class="alert alert-error">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <span>Error! Something went wrong.</span>
                </div>
            </div>
        </div>

        <!-- Progress & Loading -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Progress & Loading</h2>
            <div class="space-y-4">
                <progress class="progress w-full" value="0" max="100"></progress>
                <progress class="progress progress-primary w-full" value="10" max="100"></progress>
                <progress class="progress progress-secondary w-full" value="40" max="100"></progress>
                <progress class="progress progress-accent w-full" value="70" max="100"></progress>
                <progress class="progress progress-info w-full" value="100" max="100"></progress>
            </div>
        </div>

        <!-- Badges -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Badges</h2>
            <div class="flex flex-wrap gap-2">
                <div class="badge">Default</div>
                <div class="badge badge-primary">Primary</div>
                <div class="badge badge-secondary">Secondary</div>
                <div class="badge badge-accent">Accent</div>
                <div class="badge badge-ghost">Ghost</div>
                <div class="badge badge-outline">Outline</div>
            </div>
        </div>

        <!-- Table -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold mb-4">Table</h2>
            <div class="overflow-x-auto">
                <table class="table table-zebra">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Job</th>
                            <th>Favorite Color</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                            <td>Cy Ganderton</td>
                            <td>Quality Control Specialist</td>
                            <td>Blue</td>
                        </tr>
                        <tr>
                            <th>2</th>
                            <td>Hart Hagerty</td>
                            <td>Desktop Support Technician</td>
                            <td>Purple</td>
                        </tr>
                        <tr>
                            <th>3</th>
                            <td>Brice Swyre</td>
                            <td>Tax Accountant</td>
                            <td>Red</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>