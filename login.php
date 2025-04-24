
<?php
    // Conexão com o banco de dados
    $host = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "banco";

    $conn = new mysqli($host, $usuario, $senha, $banco);

    // Verifica a conexão
    if ($conn->connect_error) {
        die("Erro de conexão: " . $conn->connect_error);
    }

    // Captura os dados do formulário
    $email = $_POST['email'];
    $senhaDigitada = $_POST['senha'];

    // Consulta o banco
    $sql = "SELECT * FROM administradores WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows === 1) {
        $usuario = $resultado->fetch_assoc();
        
        if (password_verify($senhaDigitada, $usuario['senha'])) {
            echo "Login bem-sucedido! Redirecionando...";
            header("Location: gerenciamento.php");
        exit;
        } else {
            echo "Senha incorreta!";
        }
    } else {
        echo "Email não encontrado!";
    }

    $conn->close();


// $senhaHash = password_hash("senha123", PASSWORD_DEFAULT);
// $conn->query("INSERT INTO administradores (email, senha) VALUES ('admin@exemplo.com', '$senhaHash')");
?>