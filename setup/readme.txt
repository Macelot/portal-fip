conferir o user e senha do banco:
/portal/php/config.php

rodar o create_table
/portal/setup/create_table.php

http://localhost/portal/setup/create_table.php

 grant ALL privileges on test.* to 'root2'@'localhost';
 grant ALL privileges on fip.* to 'root2'@'localhost';

===================Exemplos===================
Exemplo básico de cadastro (Nova Sessão)
http://localhost/portal/pages/templates/nova-sessao.php?pagina=nova-sessao

Exemplo básico de listagem
http://localhost/portal/pages/templates/disposicao-sessao.php?pagina=disposicao-sessao


===================Exemplos===================

******************To-Do list******************
login com com outras redes sociais  -
Esqueci minha senha                 - pegar de portal_novembro
Registrar novo membro               - pegar de portal_novembro
Logo para index.html                - ok
permissões apenas para logados      -

Autodigitação nome professores      - ok
Autodigitação nome integrantes      -

accounts?   
    register.html ok
    
página de professores
página de estudantes
página de avaliadores

upload arquivo pre-projeto, resumo, apresentação(pdf, link, vídeo ...).
file:///Users/marcelojtelles/Documents/wamp/AdminLTE320/pages/forms/advanced.html

Filtrar inputs


=============================================
Analisar e Definir
Envio de email para revisores
Gravar a avaliação dos revisores
Separação das salas
Listas de trabalhos por salas 

Visão do Estudantes, Avaliadores, Orientadores=Professores, Adms ...


LINKS 
AutoComplete
https://www.w3schools.com/howto/howto_js_autocomplete.asp

Alertfy

Bootstrap

JQuery



-----
DisposicaoDasSessoes
Sala (varchar 20)
Horario (varchar 100)
Inscricao (varchar 20)
TituloPesquisa (varchar 255)
Area (??)
Ciclo
	Faltou Orientador/ Autores


Classificados
Inscricao (varchar 20)
TituloPesquisa (varchar 255)
EstudanteResponsavelInscricao (Text)
Area (??)
Turma (varchar 100)


Fazer listas/constantes PHP
salas
 ciclo
 area

---
DisposicaoMediadorSala
Sala (varchar 20)
Ciclo (varchar 100)
ProfessorMediador (varchar 255)
Hora (varchar)
Obs (Text)

avaliação
avaliador
proejto

avaliação-estudante


https://medium.com/@laraveltuts/how-to-login-with-google-in-php-3c9ea2abe2eb
CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `google_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
 `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
 `profile_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
 PRIMARY KEY (`id`),
 UNIQUE KEY `google_id` (`google_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;




<!-- Alertas Sweet-->
<script src="./dist/js/swal.js"></script>

<!-- validar email-->
<script src="./dist/js/valida-email.js"></script>

<!--  Auto Complete JS -->
<script src="../../dist/js/auto-complete.js"></script>