
<div class="custom-container-lgpd">
    <div class="box-content">
        <p>Bem-vindo!</p>
        <p style="margin-top: 10px">A Vida e Você usa cookies para armazenar informações sobre como você usa o nosso site. Tudo para tornar sua experiência a mais agradável possível. Para entender os tipos de
            cookies que utilizamos, clique em '<a style="color:#007bff" href="/politica-de-privacidade/1">Termos de Uso e Política de Privacidade</a>'.
            Ao clicar em 'Aceitar', você consente com a utilização de cookies e com os termos de uso e política de
            privacidade.</p></div>
    <div class="box-button">
        <button id="lgpdAaceitarBtn" style="cursor: pointer">ACEITAR</button>
        <button onclick="location.href='/politica-de-privacidade/1'" style="cursor: pointer">TERMOS DE USO</button>
    </div>
</div>

<style>
    .custom-container-lgpd {
        position: fixed;
        bottom: 20px;
        left: 50%;
        transform: translate(-50%);
        background-color: #fff;
        color: #555;
        z-index: 9999;
        box-sizing: border-box;
        padding: 20px;
        max-width: 1170px;
        width: 100%;
        display: none;
        align-items: center;
        justify-content: space-between;
        border: 1px solid hsla(0,0%,44%,.25);
        box-shadow: 0 2px 4px 0 rgb(0 0 0 / 16%);

    }

    .custom-container-lgpd .box-content {
        font-size: 14px;
        flex: 1;
    }

    .custom-container-lgpd .box-button {
        margin-left: 20px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height: 80px;
    }

    .custom-container-lgpd .box-button button {
        padding: 8px 15px;
        background: #000;
        color: #fbfcff;
        border-radius: 0;
        font-weight: 700;
        border: transparent;
        font-size: 12px;
        width: 150px;
    }

    @media (max-width: 767px) {
        .custom-container-lgpd {
            flex-direction: column;
        }

        .custom-container-lgpd .box-button {
            flex-direction: row;
            align-items: center;
            width: 100%;
            margin: 15px 0 0;
            height: auto;
        }
    }
</style>
<script>
    function lgpdAceito() {
        return localStorage.getItem('lgpd-aceito') === 'sim';
    }

    const lgpdElement = $('.custom-container-lgpd');
    const lgpdAceitarBtnElement = $('#lgpdAaceitarBtn');

    if(!lgpdAceito()) {
        lgpdElement.css('display', 'flex');
    }

    lgpdAceitarBtnElement.on('click touchend', function (e) {
        localStorage.setItem('lgpd-aceito', 'sim');
        lgpdElement.css('display', 'none');
    });
</script>



