<div class="flex items-center justify-center bg-base-200 min-h-screen">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center text-2xl font-bold">ログイン</h2>
            
            <form wire:submit.prevent="login" class="space-y-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">メールアドレス</span>
                    </label>
                    <input 
                        type="email" 
                        wire:model="email" 
                        class="input input-bordered @error('email') input-error @enderror"
                        placeholder="メールアドレスを入力してください"
                    />
                    @error('email') 
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">パスワード</span>
                    </label>
                    <input 
                        type="password" 
                        wire:model="password" 
                        class="input input-bordered @error('password') input-error @enderror"
                        placeholder="パスワードを入力してください"
                    />
                    @error('password') 
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">ログイン</button>
                </div>
            </form>

            <div class="divider">または</div>
            
            <div class="text-center">
                <p>アカウントをお持ちでない方は <a href="/register" class="link link-primary">こちらから登録</a></p>
            </div>
        </div>
    </div>
</div>