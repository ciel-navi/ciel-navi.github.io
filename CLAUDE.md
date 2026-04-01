# CIEL Website (HP) - Claude Code コンテキスト

## プロジェクト概要
株式会社シエルのコーポレートサイト。静的HTML/CSS。GitHub Pages でホスティング。

## 現在の状況（2026-04-01時点）
- Google Play ストア審査中
- `apps.html` にゴルフィット・PLAYLOLなどのアプリ紹介を掲載予定
- 以下の情報を追加予定:
  - Google Play リンク
  - 会社情報（代表者名、所在地など）
  - 実際の連絡先メール（現在は `hello@ciel.co.jp` プレースホルダー）

## ファイル構成
- `index.html` — トップページ
- `apps.html` — アプリ一覧ページ
- `insole.html` — インソール製品ページ
- `style.css` — スタイル
- `sitemap.xml` — SEO用サイトマップ
- `robots.txt` — クローラー設定
- `symbol.png` — ロゴアイコン（キツネ）
- `symbol.svg` / `wordmark.svg` — SVGアセット（未追跡）

## GitHub
- Organization: `ciel-navi`
- リポジトリ: `ciel-navi/ciel-navi.github.io`
- URL: https://ciel-navi.github.io/
- ※ 旧リポジトリは `navi-RAY/ciel-website`（個人アカウントのユーザー名変更を避けるため Organization に移行）

## デザイン経緯

### カラーパレット
- 旧: 茶色・ウォームトーン系
- 現在: ネイビー × ゴールド × ホワイト（高級感）
  - 背景: `#090c18`（ダークネイビー）
  - テキスト: `#f2f3f7`
  - アクセント: `#c4a55c`（ゴールド）
  - サブ: `#7882a0`、`#40456a`

### ヒーローセクション
- 削除済み（大きな余白に違和感があったため）
- 代わりにヘッダーの「Ciel」ワードマークを拡大（`font-size: 28px`、ロゴ `54px`）

### オープニングアニメーション
- ロゴ＋会社名が上下の線で挟まれて表示 → フェードアウト → サイト本体が現れる
- タイミング調整済み（速め）:
  - コンテンツ・線のフェードアウト: `2.2s` 開始
  - 背景フェードアウト: `2.5s` 開始
  - サイト本体の出現: `3300ms` 後（JS `setTimeout`）

### 斜線（ゴールドの対角線）
- `index.html` の `<body>` 直下に `<svg class="the-line">` として配置
- `position: absolute; top: 0; z-index: -1` で全コンテンツの背後に表示
- `body { isolation: isolate }` で stacking context を明示的に作成
- 不透明度は `0.25`（控えめな背景装飾）
- スマホ（max-width: 600px）では `display: none`
- ※ `position: fixed` にすると文字に被るため absolute で実装

### SEO
- meta description、OGP、Twitter Card を全ページに設定
- `sitemap.xml` と `robots.txt` 作成済み
- Google Search Console への登録はユーザー側で対応予定

## 未対応タスク
- [ ] 問い合わせフォーム（Formspree でメールアドレスをHTMLから隠す）
- [ ] Google Search Console にサイトマップ登録
- [ ] カスタムドメイン設定（社長と協議中）
- [ ] apps.html / insole.html の画像素材追加
- [ ] App Store / Google Play の実リンク（現在 `href="#"` プレースホルダー）
