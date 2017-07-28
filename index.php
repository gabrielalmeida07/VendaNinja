<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Vendas Ninja</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style type="text/CSS">
.postagem {
    background:# ;
    padding: 10px;
    margin-bottom: 10px  ;
    border-radius: 10px ;
   
}
#formu{
	float: right;
	margim:10px;
	width:250px;
	height:250px;
	border:1px solid gray;
}

#navegacao{
    background: #9dbb44;

    height:45px;
    position: fixed;
    width: 100%;
    
}

#ninja{
	float:center;
    width:100%;

}
</style>
		<script>
			$(document).ready( function(){

				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_usuario').css({'border-color': '#CCC'});
					}

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false;
				});
			});					
		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
		 <div id="navegacao">
		 <div class="container">
			  
	        
				<div class="navbar-header">
					
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/vendas_ninja_.png" />
	        </div>
	        	
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li class="<?= $erro == 1 ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="validar_acesso.php" id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Nome Completo" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								
								<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />
								
							</form>

							<?php
								if($erro == 1){
									echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
								}
							?>

						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
		  </div></div>
		  </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	  
	
				<div class="postagem">
	        <img id="ninja" src="imagens/Wireframe_25_07.png">
					</p>
				</div>
				<div class="jumbotron">
					<h1>Blog Vendas Ninja!</h1>
					<h2>Inscreva-se e faça o download do conteúdo: <a href="inscrevase.php"><button>Inscrever-se</button></a></h2>
					
					
					<p></p>
					
					<h3>	VOCÊ SABIA?</h3>
						

<p>Cerca de 40% dos vendedores não sabem o que é, nem como identificar, a

necessidade (ou verdadeira dor) de um cliente segundo o coaching

comercial Wilques Erlacher (http://wilqueserlacher.com/wp/quem-

sou/).</p><p> Esse dado aponta para uma das principais causas pela qual os

profissionais dessa área encontram tanta resistência durante o funil de

vendas e se desesperam a cada final de mês para bater metas, você pode

perceber isso ao buscar pelas palavras “ bater metas” no google trends .</p><p>

Você costuma pensar em como o cliente que ser tratado,

honestamente?</p><p>

Saiba que esse exercício pode trazer insights valiosos que podem te

ajudar a personalizar seu atendimento e ser mais efetivo, então você

perceberá que talvez a culpa não esteja na má qualificação dos leads, nem

no marketing e nem em qualquer outro lugar. A não ser que você só anote

pedidos, a maneira como trata (lida com) um cliente potencial

determinará a frequência com que você consegue conduzir ele ao longo

do funil de vendas até a tão esperada conversão.</p><p>

Como queremos ser seus parceiros para que você se torne um Vendedor

Ninja, segue umas dicas para você começar seu treinamento:<p>

Ouça quando o cliente está falando, OUÇA:</p><p>

O cliente não quer comprar nada, ele quer resolver um problema, aliviar</p><p>

uma dor ou várias, e você pode estar preocupado demais em vender.</p><p>

Cale-se e ouça, entenda.</p><p>

Dê razões para que o cliente perceba que você tem a solução

perfeita para os problemas dele:</p><p>

Se o cliente realmente precisa da solução que você oferece, ele deve

entender quais benefícios isso trará para ele.</p><p>

Jamais subestime o cliente:</p><p>

Muitos vendedores imaginam que sabem tudo e pensam que o cliente é

um tolo. Não diga o que você acha que o cliente quer ouvir, ele é tão mais

esperto que você, que vai comprar de outra pessoa.</p><p>

“ Você não se torna um excelente vendedor

em um dia. Você se torna um excelente vendedor no

dia a dia.” – Jeffrey Gitomer ( Já fez vendas de 1

dólar e já ganhou 1 milhão de dólares em vendas.)</p>
				
</div>				
				<div class="jumbotron">
	        <h1>Venda tradicional x inside sales!</h1>
					
					
			
					

<p>Venda tradicional x inside sales</p>
<p>No processo de venda tradicional, principalmente se falarmos de vendas mais complexas, é comum fazermos diversas reuniões até o aperto de mão final.</p>
<p>Ainda se falando de uma venda mais complexa, usarei como exemplo o processo que eu mesma seguia em uma empresa que trabalhei há alguns anos:</p><p>
Cold calling pelo telefone ou envio de apresentação comercial da sua empresa via e-mail para listas de contato;</p><p>
Telefonema ou e-mail para agendar a apresentação presencial do serviço ou produto;</p><p>
Deslocamento – ida + volta – até a empresa que você ou o vendedor está prospectando;</p><p>
Primeira reunião na empresa do lead ou prospect;</p><p>
Contato por e-mail ou telefone demonstrando interesse na solução e solicitando uma proposta com valores;</p><p>
Reunião para diagnóstico, planejamento ou levantamento do que será desenvolvido;</p><p>
Reunião para apresentação do projeto ou solução ofertada e o desdobramento dos valores a serem investidos;</p><p>
Negociação e possíveis ajustes da proposta;</p><p>
Aperto de mão final e assinatura do contrato de prestação de serviços.</p><p>
Soa cansativo só de ler, não é mesmo?</p><p>
Usando o exemplo que adotamos aqui na Buscar ID para captação de clientes para o ID control, o processo é simplificado à 4 principais passos.</p><p>
Primeiro, ao invés de ligarmos pra quem nunca ouviu falar da nossa empresa (cold calling), ligamos apenas para quem demonstrou interesse na solução ou quem tenha um dos problemas que podemos resolver.</p><p>
Assim, entramos em contato com leads que foram previamente qualificados pelo marketing ou que levantaram a mão, pedindo um contato de um dos nossos especialistas.</p><p>
A qualificação do lead pode ocorrer por lead scoring ou por filtros que aplicamos, sempre buscando leads que tenham o perfil desejado.</p><p>
No primeiro contato, confirmamos algumas informações básicas como cargo e empresa, e nos certificamos de que aquela empresa ou profissional tenha pelo menos uma das dores que nossa solução resolve.</p><p>
Se aquela pessoa se encaixa no perfil, tem interesse e urgência em resolver o problema apontado, convidamos para uma conversa onde vamos analisar o problema juntos e propor uma solução, mesmo que em alguns casos a solução que ele precise naquele momento não seja a nossa.</p><p>
É uma venda 100% consultiva e orientada à solução do problema inicial. O consultor se posiciona como um médico, e essa primeira conversa é totalmente focada no diagnóstico, onde devemos coletar o máximo possível de informações relevantes do nosso paciente para conseguirmos receitar a solução que realmente funcione e gere resultados positivos.</p><p>
A parte em que receitamos a solução é o terceiro passo do nosso processo: com base no que ele te falou no diagnóstico e com base no seu conhecimento e expertise, você é capaz de receitar a melhor solução ou conjunto de soluções para aquele cliente.
É somente neste terceiro passo que focamos no que a empresa pode oferecer como melhor solução, apresentando possíveis planos e estratégias para resolvermos o problema e ajudarmos nossos clientes a crescerem junto com a gente.</p><p>
Depois da apresentação da proposta, em alguns casos já é possível batermos o martelo e evoluirmos para o envio do contrato digital. Em algumas empresas, a solução é apresentada para outros setores ou até para investidores, que darão a resposta final. No segundo caso, agendamos uma reunião para o follow up da proposta.</p><p>
É claro que o tempo até o fechamento pode variar entre uma semana até alguns meses, mas apesar do processo ser feito na maioria das vezes sem contato físico, é um processo minucioso, extremamente personalizado e com um investimento muito menor do que no processo tradicional.</p><p>
Agora que já expliquei em detalhes, podemos resumir os passos de volta em 4 etapas, como eu tinha citado anteriormente:</p><p>
Qualificação do lead e detecção do problema;</p><p>
Diagnóstico e análise do problema;</p><p>
Apresentação da solução e proposta de investimento;</p><p>
Follow Up ou negociação.</p><p>
“Ah, mas muitos clientes ainda não estão prontos para esse novo processo e só fecham contrato com uma reunião presencial.” Não tem problema. Principalmente com clientes maiores ou em mercados tradicionais, algumas vezes fazemos alguns passos presenciais, mas fazemos o máximo possível de forma remota. E não economizamos só o nosso tempo e investimento, o cliente também economiza.</p><p>
Com um CAC enxuto e alta produtividade, é possível ter uma maior margem, otimizando também o investimento do seu cliente, que vai ter a melhor solução por um preço menor.</p><p>
Até aqui tudo certo? Ficou claro como o inside sales pode trazer todos esses benefícios para seu negócio, com um investimento menor mesmo se você precisar equilibrar .</p>

					</p>
				</div>
				<div class="jumbotron">
	        <h1>Tenha sempre um "sim" como resposta!! </h1>
				<br>
						<p>

Você, vendedor, está naturalmente no seu dia-a-dia enviando e-mails a clientes ou potenciais clientes para demonstrar algum produto ou serviço, mandar alguma apresentação, marcar o horário de uma ligação ou de uma reunião, ou até mesmo solicitar a resposta de uma proposta comercial enviada anteriormente.</p>
<p>
No entanto, o tipo de email que mandamos pode ser determinante na obtenção de uma resposta. Ora, o pior para um vendedor não é ter um ‘não’ como resposta, mas a ausência dela. O lead fica lá travando seu pipeline, sendo que você poderia dedicar seu tempo a alguma outra oportunidade, com mais chance de convertê-lo em cliente.</p> 
<p>
Um email com mais chance de resposta, além de ter um assunto instigante e direto, é curto, simples de responder e tem o que chamamos de call-to-actions (CTAs), ou é bom português chamadas para ação. A CTA do seu email será a parte que incita o lead a executar alguma ação. Na caso ideal, uma resposta imediata. </p>
<p>
Pensando nisso, deixamos aqui 5 exemplos de call-to-actions para inserir em seus emails e aumentar sua taxa de resposta.</p> 
<p>
<b>1)Por favor me confirme até [DATA] se você está pronto para [X]</b> 
Quão mais urgente for o seu prazo, coloque uma data mais próxima da realidade. Já o X em questão pode ser a assinatura de contrato, aquisição do produto, marcar uma reunião, etc. </p>
<p><b>
2) O que você precisa de mim para seguirmos? </b>
Aqui, por mais que ele não precise de nada, você se coloca à disposição e o lead tende a confirmar o seguimento do processo</p>
<p><b>
3) Devemos conseguir a resposta de mais alguém? </b>
Se depender apenas do lead seguir com o processo, ele irá entender que tem que fazer algo e está em dívida com você. Caso outra pessoa tenha que ser envolvida, servirá como um lembrete. </p>
<p><b>
4) Vou te mandar um lembrete 1 dia antes da nossa reunião. Pode ser?</b> 
Aqui você pergunta o “pode ser” não por redundância, mas como um reforço de que o lead deve saber que irá despender parte do tempo precioso dele para te ouvir e vice-versa. E claro, não esqueça de mandar realmente o lembrete, seja um invite formal no Google Agenda, seja um simples email. </p>

<p><b>5) Você ainda está interessado em [Y]? Se não, por favor me avise e os dois lados ganham tempo.</b>
Essa aqui é pra quando o lead te deu aquele gelo por tanto tempo que você já nem sabe se ele lembra que você existe. Essa aqui é quase como um “oi sumido” pro lead. Só que você precisa de um ‘sim’ ou ‘não’ e não de um ‘talvez’. Se o seu contato realmente estava ocupado, irá te confirmar o interesse e retomar o assunto. Pode ser que a resposta seja negativa, o que te permitirá trabalhar outras oportunidades. O pior é a ausência de resposta! </p>
<p>
Utilize esses CTAs por email e veja qual deles te traz uma boa taxa de resposta! E claro, adapte-o pra realidade do seu mercado e da sua empresa. BOAS VENDAS! </div>

	      <div class="clearfix"></div>
		</div>


		</div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
	<script>
 (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
 (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

 ga('create', 'UA-103399508-1', 'auto');
 ga('send', 'pageview');

</script>
</html>