# チームラボ オンラインスキルアップSTEP1

## 起動・停止

起動
```
$ docker-compose up -d
```

停止
```
$ docker-compose down
```

## URL

index.php  
http://192.168.99.100:9000

sql.php
http://192.168.99.100:9000/sql.php

pgadmin  
http://192.168.99.100:9000:5050


## ディレクトリ構成
* phpなコンテンツは./appに配置
* nginxの設定は./nginx/site.conf

```
.
├── app
│   └── index.php
├── nginx
│   └── site.conf
├── pgadmin
├── pgsql
│   └── data
│       └── .gitkeep
├── docker-compose.yml
├── .gitignore
└── README.md
```

## pgadminへの接続
デフォルトのログインアカウントは以下の通り
```
USER：user@domain.com
PASS：SuperSecret
```

データベースの追加は以下の通り
```
サーバー名：DB
HOSTNAME：pgsql
DBNAME：postgres
USERNAME：postgres
PASSWORD：example
PORT:5432
```
