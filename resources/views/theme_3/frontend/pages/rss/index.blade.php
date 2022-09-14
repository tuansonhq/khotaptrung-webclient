<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title><![CDATA[ DevDojo ]]></title>
        <link><![CDATA[ https://your-website.com/feed ]]></link>
        <description><![CDATA[ Your website description ]]></description>
        <language>en</language>
        <pubDate>{{ now() }}</pubDate>

        <title>{{ $data->seo_description??'' }}</title>
        <description>{{ setting('sys_description') }}</description>
        <image>
            <url>{{setting('sys_og_image')}}</url>
            <title>{{setting('sys_title')}}</title>
            <link>{{\Request::server ("HTTP_HOST")}}</link>
        </image>
        <pubDate>{{ now() }}</pubDate>
        <generator>VnExpress</generator>
        <link>{{\Request::server ("HTTP_HOST")}}</link>


        <item>
            <title>Tài tử 'Squid Game' lập lịch sử tại Emmy</title>
            <description>
                <![CDATA[
                <a href="https://vnexpress.net/tai-tu-squid-game-lap-lich-su-tai-emmy-4510691.html">
                    <img src="https://i1-giaitri.vnecdn.net/2022/09/13/-3560-1663045197.jpg?w=1200&h=0&q=100&dpr=1&fit=crop&s=pX-B0QM2xWh04ub7uL_rpQ" >
                </a>
                </br>Tài tử Hàn Lee Jung Jae cùng đoàn phim "Squid Game" thắng nhiều hạng mục quan trọng tại lễ trao giải Emmy 2022. ]]>
            </description>
            <pubDate>Tue, 13 Sep 2022 12:19:44 +0700</pubDate>
            <link>https://vnexpress.net/tai-tu-squid-game-lap-lich-su-tai-emmy-4510691.html</link>
            <guid>https://vnexpress.net/tai-tu-squid-game-lap-lich-su-tai-emmy-4510691.html</guid>
        </item>

    </channel>
</rss>
