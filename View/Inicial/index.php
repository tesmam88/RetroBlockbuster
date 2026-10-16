<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RetroBlockbuster - A Magia Voltou</title>
    
    <!-- Link para os CSS separados -->
    <link rel="stylesheet" href="View/assets/css/style.css">
    <link rel="stylesheet" href="View/assets/css/publico.css">
</head>
<body>

    <!-- NAVBAR PUBLIC -->
    <nav class="navbar-public">
        <a href="#" class="logo">
            <span class="logo-retro">Retro</span><span class="logo-block">Blockbuster</span>
        </a>
        <div class="nav-links">
            <a href="#">Início</a>
            <a href="#">Filmes</a>
            <a href="#">Jogos Clássicos</a>
        </div>
        <a href="#" class="btn-entrar">Entrar</a>
    </nav>

    <!-- HEADER: HERO CINEMA -->
    <header class="hero-cinema">
        <h1>A MAGIA DA<br>LOCADORA VOLTOU</h1>
        <p>Pegue sua pipoca. O espetáculo está prestes a começar.</p>
        <button class="btn-telao" id="btnAnimarTelao">BAIXAR O TELÃO 🎬</button>
    </header>

    <!-- SEÇÃO DO TELÃO DESCENDO SOBRE AS POLTRONAS -->
    <section id="area-telao" style="background-color: #111; padding-bottom: 50px;">
        <!-- Aquela barra de metal no topo do telão -->
        <div class="suporte-telao"></div>
        
        <!-- O Canvas do Telão onde os filmes aparecem -->
        <div class="telao-conteudo" id="conteudoTelao">
            <div class="grid-filmes">
                
                <!-- Exemplo Card 1 -->
                <div class="card-filme">
                    <span class="tag-midia">SNES</span>
                    <h3>Super Mario World</h3>
                    <div class="preco-pill">R$ 6,00</div>
                </div>

                <!-- Exemplo Card 2 -->
                <div class="card-filme">
                    <span class="tag-midia">VHS</span>
                    <h3>De Volta para o Futuro</h3>
                    <div class="preco-pill">R$ 4,50</div>
                </div>

                <!-- Exemplo Card 3 -->
                <div class="card-filme">
                    <span class="tag-midia">DVD</span>
                    <h3>O Exterminador do Futuro 2</h3>
                    <div class="preco-pill">R$ 5,00</div>
                </div>

            </div>
        </div>
    </section>

    <!-- SCRIPT DA ANIMAÇÃO -->
    <script>
        document.getElementById('btnAnimarTelao').addEventListener('click', function() {
            const telao = document.getElementById('conteudoTelao');
            const btn = document.getElementById('btnAnimarTelao');
            
            telao.classList.toggle('aberto');
            
            if (telao.classList.contains('aberto')) {
                btn.innerHTML = "SUBIR O TELÃO 🔼";
                setTimeout(() => {
                    document.getElementById('area-telao').scrollIntoView({ behavior: 'smooth' });
                }, 400);
            } else {
                btn.innerHTML = "BAIXAR O TELÃO 🎬";
            }
        });
    </script>

</body>
</html>