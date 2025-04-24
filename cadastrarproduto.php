<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Plantas Carlinhos > Novo produto</title>
    <link rel="stylesheet" href="css/cadastrarproduto.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Jacques+Francois&display=swap" rel="stylesheet">
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.inputmask.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    
</head>
<body>
    <div class="app-container">
        <!-- Barra Lateral -->
        <aside class="sidebar">
            <div class="logo-container">
                <div class="logo-icon">
                    
                    <img src="assets/logoplanta.svg" class="logo-inner">
                </div>
                <div class="logo-text">Plantas Carlinhos</div>
            </div>

            <nav class="menu">
                <div class="menu-section">
                    <div class="menu-item active">
                        <div class="menu-icon">
                            <img src="assets/produtos.svg" class="products-icon">
                        </div>
                        <a href="gerenciamento.php" style="text-decoration: none;">
                            <div class="menu-text">Produtos</div>
                        </a>
                    </div>
                    <div class="menu-item">
                        <div class="menu-icon">
                            <img src="assets/pedido.svg" class="orders-icon">
                        </div>
                        <div class="menu-text">Pedidos</div>
                    </div>
                    <div class="menu-item">
                        <div class="menu-icon">
                            <img src="assets/configuracao.svg" class="settings-icon">
                        </div>
                        <div class="menu-text">Configurações</div>
                    </div>
                </div>

                <div class="menu-item logout">
                    <div class="menu-icon">
                        <img src="assets/log out.svg" class="logout-icon">
                    </div>
                    <a href="admin.php" style="text-decoration: none;" class="menu-text" >
                        Log Out
                    </a>
                </div>
            </nav>
        </aside>

        <!-- Conteúdo principal -->
        <main class="main-content">
            <!-- Cabeçalho -->
            <header class="content-header">
                <div class="breadcrumb">
                    <span class="breadcrumb-item">Produtos</span>
                    <span class="breadcrumb-separator">></span>
                    <span class="breadcrumb-active">Novo produto</span>
                </div>
                <div class="header-actions">
                    <button class="import-button">
                        <img src="assets/importar.svg" class="import-icon">
                        <span>Importar</span>
                    </button>
                    <a href="gerenciamento.pho" style="text-decoration: none;">
                        <button class="register-button">
                            <img src="assets/cadastrar.svg" class="register-icon">
                            <span>Cadastrar produtos</span>
                        </button>
                    </a>
                </div>
            </header>

            <!-- Conteúdo do formulário -->
            <div class="form-container">
                <!-- Primeira linha -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="nome_planta">Nome da planta <span class="required">*</span></label>
                        <input id="nome_planta" type="text" placeholder="Ex. Palmeira Ráfia">
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria</label>
                        <select id="categoria" class="select-wrapper">
                            <option value="pqeuna">Plantas pequenas</option>
                            <option value="media">Plantas médias</option>
                            <option value="grande">Plantas grandes</option>
                
                            <img src="assets/seletor.svg" class="dropdown-arrow">
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="preco-produto">Preço <span class="required">*</span></label>
                        <div class="price-input">
                            <span>R$</span>
                            <input id="preco-produto" placeholder="10,00">
                        </div>
                    </div>
                </div>

                <!-- Observações -->
                <div class="form-group">
                    <label for="observacoes">Observações</label>
                    <textarea id="observacoes"></textarea>
                </div>
                <script>
                    $(document).ready(function() {
                    $('input[type="number"]').on('keypress', function(e) {
                        if (e.which < 48 || e.which > 57) {
                        e.preventDefault(); 
                        }
                    });
                    });
                </script>
                <!-- Linha de estoque -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="estoque_atual">Estoque atual</label>
                        <input id="estoque_atual"type="number" value="50" max="999999">
                    </div>
                    <div class="form-group">
                        <label for="estoque_minimo">Mínimo</label>
                        <input id="estoque_minimo" type="number" value="10" max="999999">
                    </div>
                    <div class="form-group">
                        <label for="estoque_maximo">Máximo</label>
                        <input id="estoque_maximo" type="number" value="100" max="999999">
                    </div>
                </div>

                <!-- Imagens-->
                <div class="form-group">
                    <label>Imagens</label>
                    
                    <div class="images-container">
                        <div class="image-upload">
                            <img src="assets/arquivonuvem.svg" class="upload-icon">
                            <div class="upload-text">
                                <p>Arraste ou solte a imagem aqui ou</p>
                                <input 
                                type="file" 
                                class="file-button"
                                id="fileInput" 
                                accept="image/jpeg,image/png" 
                                onchange="handleFileSelect(this)"
                                >Escolha um arquivo</input>
                                <!-- <button class="file-button">Escolha um arquivo</button> -->
                                <p class="file-info">Máximo 15MB: JPEG, JPG ou PNG</p>
                                <p class="file-info">Dimensões máximas: 300px | 300px</p>
                            </div>
                        </div>
                        <div class="image-previews">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                            <img src="assets/iconeimagem.svg" class="image-preview">
                        </div>
                    </div>
                </div>

                <!-- Dimensões -->
                <div class="form-row">
                    <div class="form-group">
                        <label for="altura">Altura</label>
                        <div class="dimension-input">
                            <span>cm</span>
                            <input id="altura" type="text" value="0,00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="largura">Largura</label>
                        <div class="dimension-input">
                            <span>cm</span>
                            <input id="largura" type="text" value="0,00">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="profundidade">Profundidade</label>
                        <div class="dimension-input">
                            <span>cm</span>
                            <input id="profundidade" type="text" value="0,00">
                        </div>
                    </div>
                </div>
                <!-- Botões de ação -->
                <div class="form-actions">
                    <button type="button" class="cancel-button">Cancelar</button>
                    <button type="submit" class="save-button">Salvar</button>
                </div>
            </div>
        </main>
    </div>
</body>
</html>