# Laravel 10 記錄系統日誌資訊以進行潛在錯誤疑難排解

引入 freshbitsweb 的 laravel-log-enhancer 套件來記錄系統日誌資訊以進行潛在錯誤疑難排解，遇到系統問題時，第一時間都會想到查詢系統上的日誌來釐清問題。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/log/` 來進行系統日誌資訊記錄。

----

## 畫面截圖
![](https://i.imgur.com/Bmp95xN.png)
> 完整的日誌記錄是系統營運、優化以及問題處理的基礎
