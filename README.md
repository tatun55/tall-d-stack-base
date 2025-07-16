# TALL Stack Base Project

Laravel 12 + Livewire 3 + Alpine.js + Tailwind CSS + DaisyUI v5 のベースプロジェクト

## 概要

このプロジェクトは、TALL スタック（Tailwind CSS, Alpine.js, Laravel, Livewire）を使用したベースアプリケーションです。認証機能、レスポンシブデザイン、35種類のテーマ切り替え機能を含んでいます。

## 主な機能

- **認証システム**: 新規登録、ログイン、ログアウト機能
- **レスポンシブデザイン**: DaisyUI v5を使用したモダンなUI
- **テーマ切り替え**: 35種類のテーマから選択可能
- **Livewire フルページコンポーネント**: SPAライクなユーザー体験
- **設定可能な最大幅**: 環境変数でレイアウト幅を調整可能

## 必要な環境

- **PHP**: 8.2以上
- **Composer**: 2.0以上
- **Node.js**: 18.0以上
- **npm**: 8.0以上
- **MySQL**: 8.0以上（またはMariaDB 10.3以上）

## セットアップ手順

### 1. プロジェクトのクローン

```bash
git clone <repository-url>
cd tall-stack-base-project
```

### 2. 依存関係のインストール

```bash
# PHP依存関係
composer install

# Node.js依存関係
npm install
```

### 3. 環境設定ファイルの作成

```bash
cp .env.example .env
```

### 4. アプリケーションキーの生成

```bash
php artisan key:generate
```

### 5. データベースの設定

#### MySQL/MariaDBの場合:

```bash
# データベース作成
mysql -u root -p
CREATE DATABASE tall_stack_base_project;
EXIT;
```

`.env`ファイルでデータベース設定を編集：

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tall_stack_base_project
DB_USERNAME=root
DB_PASSWORD=your_password
```

### 6. データベースマイグレーション

```bash
php artisan migrate
```

### 7. アセットのビルド

```bash
# 開発環境用
npm run dev

```

### 8. アプリケーションの起動

```bash
# 開発サーバー起動
php artisan serve

# または、npmスクリプトで全サービス起動
npm run dev
```

ブラウザで `http://localhost:8000` にアクセス

## 設定オプション

### レイアウト最大幅の設定

`.env`ファイルで画面の最大幅を設定可能：

```env
# 使用可能な値: sm, md, lg, xl, 2xl, 3xl
LAYOUT_MAX_WIDTH=2xl
```

### アプリケーション設定

```env
APP_NAME="TALL Stack APP"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://localhost:8000
```

## プロジェクト構成

```
tall-stack-base-project/
├── app/
│   ├── Pages/              # Livewireフルページコンポーネント
│   │   ├── Welcome.php
│   │   ├── Register.php
│   │   └── Login.php
│   └── Models/
│       └── User.php
├── resources/
│   ├── layouts/            # レイアウトファイル
│   │   ├── app.blade.php   # メインレイアウト（navbar/footer付き）
│   │   └── base.blade.php  # ベースレイアウト（認証画面用）
│   ├── pages/              # ページビュー
│   │   ├── welcome.blade.php
│   │   ├── register.blade.php
│   │   └── login.blade.php
│   ├── css/
│   │   └── app.css
│   └── js/
│       └── app.js
├── config/
│   └── app.php             # screen_max_width設定を含む
└── routes/
└── web.php
```

## 使用技術

- **Laravel 12**: PHPフレームワーク
- **Livewire 3**: リアクティブコンポーネント
- **Alpine.js**: 軽量JavaScriptフレームワーク
- **Tailwind CSS**: ユーティリティファーストCSS
- **DaisyUI v5**: Tailwind CSSコンポーネントライブラリ（35テーマ）
- **Vite**: 高速ビルドツール

## トラブルシューティング

### 1. 依存関係エラー

```bash
composer update
npm install
```

### 2. 権限エラー

```bash
sudo chown -R $USER:$USER storage bootstrap/cache
chmod -R 755 storage bootstrap/cache
```

### 3. データベース接続エラー

- `.env`ファイルのDB設定を確認
- データベースサーバーが起動しているか確認
- 認証情報が正しいか確認

### 4. アセットが読み込まれない

```bash
npm run build
php artisan config:clear
```

## ライセンス

このプロジェクトはMITライセンスの下で公開されています。