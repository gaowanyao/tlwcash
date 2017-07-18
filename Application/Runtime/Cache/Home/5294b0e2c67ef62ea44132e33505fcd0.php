<?php if (!defined('THINK_PATH')) exit();?>




<div style="width: 100%; height: 426px;" id="sosobtc_market"></div>
<script src="//static2.sosobtc.com/public/assets/plugin/sosobtc_plugin.js"></script>
<script type="text/javascript">
    (function () {
        SOSOBTC('Market').init({
            id: 'sosobtc_market',
            btc: ['btc','bitstamp', 'btce', 'huobi', 'okcoin', 'chbtc', 'okcoinfutures_week'],
            ltc: ['btce', 'huobi', 'okcoin', 'chbtc'],
            alt: ['ppc', 'doge', 'pts'],
            bter: ['doge'],
            others: ['eth_yunbi'],
            row: ['price', 'buy', 'sell', 'high', 'low', 'vol']
        });
    })();
</script>


<br/>
<br/>
<br/>


<div style="width: 100%; height: 560px;" id="sosobtc_kline2"></div>
<script  src="http://www.sosobtc.com/public/assets/plugin/sosobtc_plugin.js"></script>
<script type="text/javascript">
    (function(){
        SOSOBTC('Kline').init({
            sid : 'huobi_btc',
            id  : 'sosobtc_kline2'
        });
    })();
</script>







<div style="width: 100%; height: 560px;" id="sosobtc_kline"></div>
<!-- SOSOBTC Widget Begin -->
<script type="text/javascript"
        src="//static2.sosobtc.com/sb.js"
></script>
<script type="text/javascript">
    new SOSOBTC.widget({
        id: 'sosobtc_kline',
        "symbol": "BTC:OKCOIN",
        "default_theme": "dark",
        "disable_theme_change": true,
        "default_open_tools": true,
        "hide_logo": true,
        "hide_market_name": true,
        "container": "kline_container"
    })
</script>
<!-- SOSOBTC Widget End -->