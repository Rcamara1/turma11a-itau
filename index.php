<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato</title>

    <link rel="stylesheet"  href="..\css\biblioteca_estilos.css">
    
</head>

<body>

    <table border="0" width="100%">
        <tr>
            <td align="center"><a href="..\html\index.html"><img src="..\imagens\logo.png"></td>
            <td align="center">QUEM SOMOS</td>
            <td align="center">CURSOS ONLINE</td>
            <td align="center">GAMA EXPERIENCE</td>
            <td align="center">PARA EMPRESAS</td>
            <td align="center">CONTATO</td>
            <td align="center">CONTEÚDO</td>


        </tr>

    </table>

    <br>
    <br>

    <div align="center">
        <form id="formuser" method="POST">
            <fieldset>
                <legend align="center">Para fazer um dos nossos cursos, preencha o nosso formulário</legend>
            <label>Nome:</label><input type="text" name="nome" required>
            <label>Email:</label><input type="email" name="email" required>
            <label>Senha:</label><input type="password" name="senha" required><br><br>
            <label>Data da realização do Curso:</label><input type="date" name="data_curso" required><br><br>
            <label>Informe o Genero:</label>
    
            <input type="radio" name="opcao_radio" value="Masculino"/> Masculino
            <input type="radio" name="opcao_radio" value="Feminino"/> Feminino
            <input type="radio" name="opcao_radio" value="Outros"/> Outros <br><br>
             
    
            
            <label>Escolha o seu curso</label>
            <select>
                <option value=""></option>
                <option value="xml">XML</option>
                <option value="html">HTML</option>
                <option value="css">CSS</option>
    
                
            </select><br><br>
            <label>Qual período deseja fazer o curso</label>
                <input type="checkbox"  name="OPCAO" value="manhã"> Manhã
                <input type="checkbox"  name="OPCAO" value="tarde"> Tarde
                <input type="checkbox"  name="OPCAO" value="noite"> Noite<br><br>
    
                <label>Anexar comprovante residência</label><input type="file" name="arquivo"><br><br>
            <input type="submit" value="Enviar">
        </fieldset>
        </form>



    </div>





</body>

</html>
