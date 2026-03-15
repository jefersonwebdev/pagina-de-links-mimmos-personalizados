<?php
/*
Template Name: Página de Links Customizada
*/
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mimmos Personalizados | Links Oficiais</title>
    <?php wp_head(); // Aqui o Rank Math e Site Kit entram ?>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="shortcut icon" href="https://mimmospersonalizados.com.br/wp-content/uploads/2024/12/cropped-mimos-personalizados-logo-1.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&family=Pacifico&display=swap" rel="stylesheet">
    <style>
        :root {
            --mimmos-teal: #8FD3D3;
            --mimmos-pink: #E88BAE;
            --mimmos-dark-pink: #D66B92;
            --mimmos-soft-bg: #f8fafb;
        }

        body {
            font-family: 'Quicksand', sans-serif;
            background: linear-gradient(135deg, #fff5f8 0%, #eef9f9 100%);
            min-height: 100vh;
        }

        .logo-container {
            position: relative;
            width: 180px;
            height: 180px;
            margin: 0 auto;
        }

        .logo-img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            /* Suave sombra para destacar a logo branca/colorida */
            filter: drop-shadow(0 6px 8px rgba(0,0,0,0.08));
        }

        .link-card {
            background: white;
            border: 1px solid rgba(143, 211, 211, 0.2);
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }

        .link-card:hover {
            transform: translateY(-4px);
            border-color: var(--mimmos-teal);
            box-shadow: 0 12px 20px -5px rgba(143, 211, 211, 0.25);
        }

        .btn-pink {
            background: linear-gradient(to right, var(--mimmos-pink), var(--mimmos-dark-pink));
            color: white;
            transition: transform 0.2s;
        }

        .btn-pink:active {
            transform: scale(0.98);
        }

        .floating-heart {
            position: absolute;
            color: var(--mimmos-pink);
            opacity: 0.4;
            pointer-events: none;
            z-index: 0;
            animation: float 8s ease-in-out infinite;
        }

        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(15deg); }
        }

        .custom-font-title {
            font-family: 'Pacifico', cursive;
            color: var(--mimmos-dark-pink);
            text-shadow: 1px 1px 0px rgba(255,255,255,0.8);
        }

        /* Efeito de vidro para o container principal no desktop */
        .glass-panel {
            background: rgba(255, 255, 255, 0.4);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.6);
        }
    </style>
</head>
<body class="py-12 px-4 relative overflow-x-hidden">
    
    <!-- Elementos Decorativos (Corações) -->
    <svg class="floating-heart" style="top: 5%; left: 8%; width: 40px;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
    <svg class="floating-heart" style="top: 15%; right: 10%; width: 25px; animation-delay: 2s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
    <svg class="floating-heart" style="bottom: 10%; left: 15%; width: 20px; animation-delay: 4s;" viewBox="0 0 24 24" fill="currentColor"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>

    <div class="max-w-md mx-auto relative z-10 text-center">
        <!-- Logo Oficial Atualizada -->
        <div class="logo-container mb-4">
            <img src="https://mimmospersonalizados.com.br/wp-content/uploads/2024/12/cropped-mimos-personalizados-logo-1.png" alt="Mimmos Personalizados" class="logo-img">
        </div>

        <!-- Título e Bio -->
        <h1 class="text-3xl font-bold mb-2 custom-font-title">Mimmos Personalizados</h1>
        <p class="text-gray-600 mb-10 font-medium px-4">Presentes exclusivos criados com amor para eternizar seus momentos. ✨</p>

        <!-- Grade de Links -->
        <div class="space-y-4">
            
            <a href="https://mimmospersonalizados.com.br" target="_blank" class="link-card block p-5 rounded-[2rem] shadow-sm flex items-center group">
                <div class="w-12 h-12 rounded-2xl bg-teal-50 flex items-center justify-center mr-4 group-hover:bg-teal-100 transition-colors">
                    <svg class="w-6 h-6 text-[#8FD3D3]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                </div>
                <div class="text-left">
                    <span class="block font-bold text-gray-800">Visite nosso Site</span>
                    <span class="text-xs text-gray-500 italic">Confira todos os personalizados aqui</span>
                </div>
            </a>

            <a href="https://wa.me/553891053883?text=Ol%C3%A1%2C%20gostaria%20de%20mais%20informa%C3%A7%C3%B5es%20sobre%20seus%20produtos.%20Vim%20pela%20p%C3%A1gina%20de%20links." class="link-card block p-5 rounded-[2rem] shadow-sm flex items-center group">
                <div class="w-12 h-12 rounded-2xl bg-green-50 flex items-center justify-center mr-4 group-hover:bg-green-100 transition-colors">
                    <svg class="w-6 h-6 text-green-500" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg>
                </div>
                <div class="text-left">
                    <span class="block font-bold text-gray-800">Peça pelo WhatsApp</span>
                    <span class="text-xs text-gray-500 italic">Atendimento personalizado</span>
                </div>
            </a>

            <a href="https://www.instagram.com/mimmos.personalizados" class="link-card block p-5 rounded-[2rem] shadow-sm flex items-center group">
                <div class="w-12 h-12 rounded-2xl bg-pink-50 flex items-center justify-center mr-4 group-hover:bg-pink-100 transition-colors">
                    <svg class="w-6 h-6 text-[#E88BAE]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                </div>
                <div class="text-left">
                    <span class="block font-bold text-gray-800">Siga no Instagram</span>
                    <span class="text-xs text-gray-500 italic">Acompanhe nossas novidades diárias</span>
                </div>
            </a>

            <!-- Destaque de Novidade -->
            <!--
            <div class="pt-8 px-2">
                <div class="bg-white p-6 rounded-[2.5rem] shadow-xl border border-pink-100 text-center relative overflow-hidden">
                    <div class="absolute top-0 right-0 p-2">
                        <span class="flex h-3 w-3">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-pink-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500"></span>
                        </span>
                    </div>
                    <span class="inline-block px-4 py-1 bg-teal-50 text-[#8FD3D3] rounded-full text-xs font-bold mb-3 tracking-wide uppercase">Lançamento</span>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">Coleção Especial de Afeto</h3>
                    <p class="text-sm text-gray-600 mb-6 leading-relaxed">Presentes que contam histórias. Conheça nossa nova linha de mimos personalizados.</p>
                    <button class="w-full btn-pink py-4 rounded-2xl font-bold shadow-lg text-lg">Quero Conhecer</button>
                </div>
            </div>
            -->

            <div class="pt-6">
                <p class="text-xs uppercase tracking-widest text-gray-400 font-bold mb-4">Novidades</p>
                <div class="bg-white p-6 rounded-3xl shadow-lg border border-pink-50 text-left">
                    <span class="inline-block px-3 py-1 bg-pink-100 text-pink-600 rounded-full text-xs font-bold mb-3">Coleção de Páscoa</span>
                    <h3 class="text-lg font-bold text-gray-800 mb-2">Confira nossos Mimmos para Páscoa!</h3>
                    <p class="text-sm text-gray-600 mb-4">Lançamos uma linha exclusiva para tornar sua celebração ainda mais especial.</p>
                    <!--
                    <button class="w-full btn-pink py-3 rounded-xl font-bold shadow-md hover:opacity-90 transition-opacity">Clique Aqui</button>
                    -->
                    <a href="https://mimmospersonalizados.com.br/categoria-produto/pascoa/" target="_blank" class="w-full btn-pink py-4 rounded-2xl font-bold shadow-lg text-lg inline-block transition-all hover:scale-105 active:scale-95" style="text-align: center;">Quero Conhecer</a>
                </div>
            </div>
        </div>

        <!-- Rodapé -->
        <footer class="mt-16 pb-8 text-gray-400 text-xs tracking-widest uppercase font-medium">
            <p>© 2026 Mimmos Personalizados</p>
            <div class="mt-2 flex justify-center space-x-1 items-center">
                <span>Feito com</span>
                <svg class="w-3 h-3 text-pink-400" fill="currentColor" viewBox="0 0 24 24"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/></svg>
                <span>por nós</span>
            </div>
        </footer>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const cards = document.querySelectorAll('.link-card, .pt-8');
            cards.forEach((card, index) => {
                card.style.opacity = '0';
                card.style.transform = 'translateY(30px)';
                setTimeout(() => {
                    card.style.transition = 'all 0.6s cubic-bezier(0.16, 1, 0.3, 1)';
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }, 100 * (index + 1));
            });
        });
    </script>
    <?php wp_footer(); // Aqui entram scripts de rastreamento extras ?>
</body>
</html>