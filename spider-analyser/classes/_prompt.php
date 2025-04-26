<?php

/**
 * 温馨提示内容
 * '{页面别名}' => array(
 *  'content' => {内容}  // 注1
 *  'title' => '温馨提示', // 选填
 *  'type'  =>  '', // 选填，图标class name
 * )
 * 
 * 注1  内容可以直接是html字符串('<dl><dd>提示a</dd><dd>提示b</dd><dd>提示c</dd></dl>；
 *      也可以是列出每项的数组(array('提示a', '提示b', '提示c'))
 */
$prompt_items = [
  'log' => [
    'content' => [
      '<b>应重点关注301/302，及404状态码主流搜索引擎（如百度、谷歌和必应）蜘蛛日志。</b>',
      '蜘蛛日志分析工作，请查阅<a href="https://www.wbolt.com/how-to-analyze-spider-log.html?utm_source=spider-analyser" target="_blank">详细教程</a>。',
      '301/302状态码内部链接，尽可能修改为最终目标链接。',
      '404状态码内部链接，应修复或重定向为正确链接。',
      '重定向可安装<a href="https://www.wbolt.com/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool插件</a>实现或<a href="https://www.wbolt.com/301-redirects.html?utm_source=spider-analyser" target="_blank">手动配置</a>。',
    ],
  ],
  'path' => [
    'content' => [
      '重点关注主流搜索引擎对文章页及<a href="https://www.wbolt.com/wordpress-sitemap.html?utm_source=spider-analyser" target="_blank">Sitemap</a>的访问爬取。',
      '持续更新发布高质量文章内容，以吸引搜索引擎爬取。',
      '安装<a href="https://www.wbolt.com/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool插件</a>或其他类似插件，通过sitemap生成配置剔除不重要链接类型。',
      '对于主流搜索引擎高频次爬取文章页，应该适当地<a href="https://www.wbolt.com/internal-links-optimization.html?utm_source=spider-analyser" target="_blank">添加内部链接</a>。',
    ],
  ],
  'post' => [
    'content' => [
      '蜘蛛访问量直接体现搜索引擎对URL的嗅觉，蜘蛛访问频率越高，URL被收录索引几率越大。',
      '蜘蛛访问量频率低且未收录文章，可以尝试<a href="https://www.wbolt.com/republishing-content.html" target="_blank">内容重建</a>及<a href="https://www.wbolt.com/internal-links-optimization.html" target="_blank">增加入链数</a>。',
      '尽可能降低文章指向其他网站的链接数，又或者<a href="https://www.wbolt.com/what-is-nofollow.html" target="_blank">外链增加nofollow属性</a>。',
      '收录状态数据通过<a href="https://www.wbolt.com/plugins/bsl-pro?utm_source=spider-analyser" target="_blank">搜索推送插件</a>引入，建议站长结合这两插件做好链接推送和爬虫分析工作。',
    ],
  ],
  'list-ip' => [
    'content' => [
      'IP段拦截前，请确保该IP段蜘蛛均是不需要统计的，若要取消拦截，请通过<router-link to="list-stop">蜘蛛拦截</router-link>列表取消。',
      'Pro版本用户可以考虑直接启用<router-link to="list-stop">智能拦截</router-link>，则无需执行手动拦截操作。',
    ],
  ],
  'list-spider' => [
    'content' => [
      '蜘蛛清单数据引自<a href="https://www.wbolt.com/tools-spider?utm_source=spider-analyser" target="_blank">蜘蛛查询工具</a>。',
      '部分不常见蜘蛛尤其是伪蜘蛛，可能类型显示为未知。但站长切勿以此为标准判别该蜘蛛是否为伪蜘蛛。',
      '对于无需记录的蜘蛛爬虫，应该选择忽略或者拦截，避免浪费服务器资源。',
    ],
  ],
  'list-stop' => [
    'content' => [
      '<b>开启智能拦截前，需确定未采用全站CDN，否则可能误判拦截真实蜘蛛。</b>',
      '部分伪蜘蛛可能会伪装成真实蜘蛛名称，对于伪蜘蛛拦截请使用IP拦截方式。',
      '按蜘蛛名称拦截，需准确填写蜘蛛名称，区分大小写，否则可能会拦截失败。',
      '蜘蛛拦截仅对前端页面爬取蜘蛛有效，对后端数据爬取蜘蛛无效。',
    ],
  ],
  'list-suspected' => [
    'content' => [
      '疑似伪蜘蛛数据参考<a href="https://www.wbolt.com/tools-spider&utm_source=spider-analyser" target="_blank">蜘蛛查询工具</a>，仅供参考。',
      '如果您的网站启用了全站CDN（如Cloudflare），真实蜘蛛也可能被判断为伪蜘蛛。全站CDN站点应结合CDN路线IP进一步判断蜘蛛的真伪。',
    ],
  ],
  'setting-list' => [
    'content' => [
      '如无需统计某一蜘蛛，可以通过操作修改该蜘蛛状态为忽略即可。',
      '对于一些非必要蜘蛛，应直接拦截，节省服务器资源。',
      '此列表的占比计算范围：最近7天的蜘蛛数据。',
      '蜘蛛名称及类型数据引自<a href="https://www.wbolt.com/tools-spider?utm_source=spider-analyser" target="_blank">蜘蛛查询工具</a>。',
    ],
  ],
  'setting-rule' => [
    'content' => [
      '支持通配符形式链接规则，如<code>/mp-api/*</code>',
      '如有不同于预设的链接类型，可以通过添加自定义来新增；否则建议在预设类型基础上修改新增。',
    ],
  ],
  'setting-log' => [
    'content' => [
      '日志保留周期可根据自身实际情况选择，一般保留30天即可。如数据量非常大，改为近7天亦可。',
      '日志更新方式需写入数据库，为保证服务器性能，可考虑每小时（默认）甚至每天更新。',
      '如蜘蛛日志数据量非常庞大，建议备份日志并删除，忽略及拦截不必要的蜘蛛。',
    ],
  ],
];

$prompt_items_en_US = [
  'log' => [
    'content' => [
      '<b>Focus on 301/302 and 404 status codes in the spider logs of major search engines (e.g., Baidu, Google, Bing).</b>',
      'Refer to the <a href="https://www.wbolt.com/how-to-analyze-spider-log.html?utm_source=spider-analyser" target="_blank">detailed tutorial</a> for spider log analysis.',
      'Update internal links with 301/302 status codes to point directly to the target URL.',
      'Fix or redirect internal links with 404 status codes to the correct URL.',
      'Redirection can be implemented using the <a href="https://www.wbolt.com/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool plugin</a> or <a href="https://www.wbolt.com/301-redirects.html?utm_source=spider-analyser" target="_blank">configured manually</a>.',
    ],
  ],
  'path' => [
    'content' => [
      'Focus on major search engines crawling article pages and the <a href="https://www.wbolt.com/wordpress-sitemap.html?utm_source=spider-analyser" target="_blank">Sitemap</a>.',
      'Continuously update and publish high-quality content to attract search engine crawlers.',
      'Use the <a href="https://www.wbolt.com/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool plugin</a> or similar plugins to configure sitemap generation and exclude unimportant link types.',
      'For frequently crawled article pages by major search engines, consider <a href="https://www.wbolt.com/internal-links-optimization.html?utm_source=spider-analyser" target="_blank">adding internal links</a> appropriately.',
    ],
  ],
  'post' => [
    'content' => [
      'Spider visiting frequency directly reflects the search engines’ perception of a URL. The higher the frequency, the greater the chance of indexing the URL.',
      'For URLs with low spider visiting frequency and not indexed, try <a href="https://www.wbolt.com/republishing-content.html" target="_blank">content rebuilding</a> and <a href="https://www.wbolt.com/internal-links-optimization.html" target="_blank">increase internal links</a>.',
      'Minimize the number of links pointing to other websites in articles, or consider adding <a href="https://www.wbolt.com/what-is-nofollow.html" target="_blank">nofollow attributes</a> to external links.',
      'Introduce indexing status data through the <a href="https://www.wbolt.com/plugins/bsl-pro?utm_source=spider-analyser" target="_blank">Search Push Plugin</a>. It is recommended to use both plugins together for better link pushing and crawler analysis.',
    ],
  ],
  'list-ip' => [
    'content' => [
      'Before intercepting IP segments, ensure the spiders from the segment are not necessary for statistics. To cancel interception, go to the <router-link to="list-stop">Spider Block List</router-link> and remove it.',
      'Pro version users can directly enable <router-link to="list-stop">Smart Intercept</router-link> to avoid manual interception.',
    ],
  ],
  'list-spider' => [
    'content' => [
      'Spider data is sourced from the <a href="https://www.wbolt.com/tools-spider?utm_source=spider-analyser" target="_blank">Spider Query Tool</a>.',
      'Some uncommon spiders, especially fake spiders, may appear with their type listed as "unknown." Do not use this as the sole criterion for determining whether a spider is fake.',
      'For spiders that do not need to be recorded, choose to ignore or intercept to save server resources.',
    ],
  ],
  'list-stop' => [
    'content' => [
      '<b>Before enabling Smart Intercept, ensure the site is not using a full-site CDN as this may misidentify real spiders.</b>',
      'Some fake spiders may disguise themselves as real spiders. Use IP-based interception to block fake spiders.',
      'When blocking by spider name, ensure the name is entered accurately (case-sensitive). Otherwise, interception may fail.',
      'Spider interception applies only to front-end page crawling spiders, not back-end data crawling spiders.',
    ],
  ],
  'list-suspected' => [
    'content' => [
      'Suspected fake spider data is sourced from the <a href="https://www.wbolt.com/tools-spider&utm_source=spider-analyser" target="_blank">Spider Query Tool</a> for reference only.',
      'If your site uses a full-site CDN (e.g., Cloudflare), real spiders may also be identified as fake spiders. Full-site CDN sites should use CDN route IPs to further determine spider authenticity.',
    ],
  ],
  'setting-list' => [
    'content' => [
      'If a spider does not need to be tracked, its status can be set to "Ignore" through the operation menu.',
      'For non-essential spiders, it is recommended to intercept them directly to save server resources.',
      'The calculation range for this list is based on spider data from the past 7 days.',
      'Spider name and type data is sourced from the <a href="https://www.wbolt.com/tools-spider?utm_source=spider-analyser" target="_blank">Spider Query Tool</a>.',
    ],
  ],
  'setting-rule' => [
    'content' => [
      'Wildcard rules are supported, such as <code>/mp-api/*</code>.',
      'For link types different from the preset, you can add custom rules to include them; otherwise, modify and add based on the preset types.',
    ],
  ],
  'setting-log' => [
    'content' => [
      'The log retention period can be customized based on actual needs. Generally, a 30-day retention period is recommended. If the data volume is very large, reduce it to 7 days.',
      'Log updates need to be written into the database. To ensure server performance, consider hourly (default) or even daily updates.',
      'If the spider log data volume is enormous, backup and delete logs while ignoring and intercepting unnecessary spiders.',
    ],
  ],
];


$prompt_items_zh_TW = [
  'log' => [
    'content' => [
      '<b>應重點關注301/302，以及404狀態碼主流搜尋引擎（如百度、Google和必應）的蜘蛛日誌。</b>',
      '蜘蛛日誌分析工作，請參閱<a href="https://www.wbolt.com/tw/how-to-analyze-spider-log.html?utm_source=spider-analyser" target="_blank">詳細教程</a>。',
      '301/302狀態碼內部鏈接，盡可能修改為最終目標鏈接。',
      '404狀態碼內部鏈接，應修復或重新導向為正確鏈接。',
      '重新導向可安裝<a href="https://www.wbolt.com/tw/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool外掛</a>實現或<a href="https://www.wbolt.com/tw/301-redirects.html?utm_source=spider-analyser" target="_blank">手動配置</a>。',
    ],
  ],
  'path' => [
    'content' => [
      '重點關注主流搜尋引擎對文章頁及<a href="https://www.wbolt.com/tw/wordpress-sitemap.html?utm_source=spider-analyser" target="_blank">Sitemap</a>的訪問爬取。',
      '持續更新發布高品質文章內容，以吸引搜尋引擎爬取。',
      '安裝<a href="https://www.wbolt.com/tw/plugins/sst?utm_source=spider-analyser" target="_blank">Smart SEO Tool外掛</a>或其他類似外掛，通過Sitemap生成配置剔除不重要的鏈接類型。',
      '針對主流搜尋引擎高頻次爬取文章頁，應該適當地<a href="https://www.wbolt.com/tw/internal-links-optimization.html?utm_source=spider-analyser" target="_blank">添加內部連結</a>。',
    ],
  ],
  'post' => [
    'content' => [
      '蜘蛛訪問量直接體現搜尋引擎對URL的嗅覺，蜘蛛訪問頻率越高，URL被收錄索引的機率越大。',
      '蜘蛛訪問量頻率低且未收錄文章，可以嘗試<a href="https://www.wbolt.com/tw/republishing-content.html" target="_blank">內容重建</a>及<a href="https://www.wbolt.com/tw/internal-links-optimization.html" target="_blank">增加內部連結數</a>。',
      '盡可能降低文章指向其他網站的鏈接數，或為其<a href="https://www.wbolt.com/tw/what-is-nofollow.html" target="_blank">增加nofollow屬性</a>。',
      '收錄狀態數據通過<a href="https://www.wbolt.com/tw/plugins/bsl-pro?utm_source=spider-analyser" target="_blank">搜尋推送外掛</a>導入，建議站長結合這兩個外掛做好連結推送和爬蟲分析工作。',
    ],
  ],
  'list-ip' => [
    'content' => [
      'IP段攔截前，請確保該IP段的蜘蛛均是不需要統計的，若要取消攔截，請通過<router-link to="list-stop">蜘蛛攔截</router-link>清單取消。',
      'Pro版本用戶可以考慮直接啟用<router-link to="list-stop">智能攔截</router-link>，則無需執行手動攔截操作。',
    ],
  ],
  'list-spider' => [
    'content' => [
      '蜘蛛清單數據引自<a href="https://www.wbolt.com/tw/tools-spider?utm_source=spider-analyser" target="_blank">蜘蛛查詢工具</a>。',
      '部分不常見蜘蛛尤其是偽蜘蛛，類型可能顯示為未知。但站長切勿以此為標準判別該蜘蛛是否為偽蜘蛛。',
      '對於無需記錄的蜘蛛爬蟲，應選擇忽略或者攔截，避免浪費伺服器資源。',
    ],
  ],
  'list-stop' => [
    'content' => [
      '<b>開啟智能攔截前，需確定未採用全站CDN，否則可能誤判攔截真實蜘蛛。</b>',
      '部分偽蜘蛛可能會偽裝成真實蜘蛛名稱，對於偽蜘蛛攔截請使用IP攔截方式。',
      '按蜘蛛名稱攔截，需準確填寫蜘蛛名稱，區分大小寫，否則可能會攔截失敗。',
      '蜘蛛攔截僅對前端頁面爬取蜘蛛有效，對後端數據爬取蜘蛛無效。',
    ],
  ],
  'list-suspected' => [
    'content' => [
      '疑似偽蜘蛛數據參考<a href="https://www.wbolt.com/tw/tools-spider&utm_source=spider-analyser" target="_blank">蜘蛛查詢工具</a>，僅供參考。',
      '如果您的網站啟用了全站CDN（如Cloudflare），真實蜘蛛也可能被判斷為偽蜘蛛。全站CDN站點應結合CDN路由IP進一步判斷蜘蛛的真假。',
    ],
  ],
  'setting-list' => [
    'content' => [
      '如無需統計某一蜘蛛，可以通過操作修改該蜘蛛狀態為忽略即可。',
      '對於一些非必要蜘蛛，應直接攔截，節省伺服器資源。',
      '此清單的占比計算範圍：最近7天的蜘蛛數據。',
      '蜘蛛名稱及類型數據引自<a href="https://www.wbolt.com/tw/tools-spider?utm_source=spider-analyser" target="_blank">蜘蛛查詢工具</a>。',
    ],
  ],
  'setting-rule' => [
    'content' => [
      '支持通配符形式鏈接規則，如<code>/mp-api/*</code>',
      '如有不同於預設的鏈接類型，可以通過添加自定義來新增；否則建議在預設類型基礎上修改新增。',
    ],
  ],
  'setting-log' => [
    'content' => [
      '日誌保留週期可根據自身實際情況選擇，一般保留30天即可。如數據量非常大，改為近7天亦可。',
      '日誌更新方式需寫入資料庫，為保障伺服器效能，可考慮每小時（預設）甚至每天更新。',
      '如蜘蛛日誌數據量非常龐大，建議備份日誌並刪除，忽略及攔截不必要的蜘蛛。',
    ],
  ],
];
