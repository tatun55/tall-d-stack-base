<div class="flex items-center justify-center bg-base-200 min-h-screen">
    <div class="card w-96 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2 class="card-title justify-center text-2xl font-bold">新規登録</h2>
            
            <form wire:submit.prevent="register" class="space-y-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">名前</span>
                    </label>
                    <input 
                        type="text" 
                        wire:model="name" 
                        class="input input-bordered @error('name') input-error @enderror"
                        placeholder="名前を入力してください"
                    />
                    @error('name') 
                        <span class="text-error text-sm">{{ $message }}</span>
                    @enderror
                </div>

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

                <div class="form-control">
                    <label class="label">
                        <span class="label-text">パスワード確認</span>
                    </label>
                    <input 
                        type="password" 
                        wire:model="password_confirmation" 
                        class="input input-bordered"
                        placeholder="パスワードを再度入力してください"
                    />
                </div>

                <div class="form-control mt-6">
                    <button type="submit" class="btn btn-primary">登録</button>
                </div>
            </form>

            <div class="divider">または</div>
            
            <div class="text-center">
                <p>既にアカウントをお持ちの方は <a href="/login" class="link link-primary">こちらからログイン</a></p>
            </div>
        </div>
    </div>
</div>