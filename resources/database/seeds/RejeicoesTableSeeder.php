<?php

use Illuminate\Database\Seeder;

class RejeicoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('rejeicoes')->delete();
      DB::table('rejeicoes')->insert([
0=> [
"id" =>1,
"n_rejeicao" => 211,
"titulo" => "IE do substituto inválida",
"resolucao" => "Verificar o parâmetro MV_SUBTRIB e verificar o código do estado do destinatério da NF. O Contador deve indicar o código correto",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
1=> [
"id" =>2,
"n_rejeicao" => 213,
"titulo" => "CNPJ-Base do Emitente difere do CNPJ-Base do Certificado Digital",
"resolucao" => "CNPJ da Filial que está transmitindo a NF é Diferente do CNPJ do Certificado Digital Configurado. Verificar se o Certificado
Após configurado, retransmitir a NF na rotina Nfe",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
2=> [
"id" =>3,
"n_rejeicao" => 219,
"titulo" => "Circulação da NF-e verificada",
"resolucao" => "Quando for emitido um Evento de Cancelamento para uma NF-e já registrada em uma barreira fiscal (com Registro de Passagem), será retornado a rejeição '219 - Circulação da NF-e verificada'.
Segundo a Regra de Validação da Sefaz, o Evento de Registro de Passagem, emitido pelo Fisco, também pode ser cancelado. Nesse caso, pode-se entrar em contato com o Fisco e solicitar o Cancelamento do Registro de Passagem, para em seguida se emitir o Evento de Cancelamento da NF-e.
",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
3=> [
"id" =>4,
"n_rejeicao" => 221,
"titulo" => "Confirmado o recebimento da NF-e pelo destinatário",
"resolucao" => "Quando o destinatário da NF-e confirmar o recebimento do documento (através do Evento de Manifestação Destinatário: Confirmação da Operação) e o emitente realizar o registro de um Evento de Cancelamento, este será rejeitado pelo motivo '221  Confirmado o recebimento da NF-e pelo destinatário'.
Deve-se entrar em contato com o Destinatário da NF-e e solicitar que registre outro Evento de Manifestação, Operação não Realizada ou Desconhecimento da Operação sobre a NF-e que ele Confirmou e que você deseja Cancelar. Com qualquer um desses eventos homologados após a Confirmação da Operação, a NF-e poderá ser Cancelada.
",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
4=> [
"id" =>5,
"n_rejeicao" => 232,
"titulo" => "IE do destinatário não informada",
"resolucao" => "Verifique no cadastro de Pessoas se a Inscrição Estadual do Destinatário da NF foi preenchida
Caso esteja preenchida, orientear o cliente a verificar se a IE não mudou ou se o Destinatário se tornou ISENTO
Após alterar o cadastro, retransmita a NF, não é necessário apagar o Documento de Entrada/Saída gerado",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
5=> [
"id" =>6,
"n_rejeicao" => 234,
"titulo" => "IE do destinatário não vinculada ao CNPJ",
"resolucao" => "Esta rejeição refere-se a uma validação por parte da Sefaz SP com relação as informações de Inscrição Estadual e CNPJ do destinatário/transportador do XML/TXT da nota fiscal. Será preciso comparar o cadastro do cliente com o cadastro neste site do governo de SP.
Verificar junto ao site do Sintegra (www.sintegra.gov.br), Receita Federal (www.receita.fazenda.gov.br) e CADESP (www.cadesp.fazenda.sp.gov.br) se as informações (CNPJ e IE) estão ativas e habilitadas.
Após alterar o cadastro, retransmita a NF, não é necessário apagar o Documento de Entrada/Saída gerado",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
6=> [
"id" =>7,
"n_rejeicao" => 267,
"titulo" => "Chave de Acesso referenciada inexistente",
"resolucao" => "Em Notas de Devolução, verificar se o Documento de Origem está com o campo Chave NFe preenchido corretamente.
* Para incluir a Chave NFe, na rotina de Documento de Entrada acesse Ações Relacionadas > Alterar sped
* Coloque a chave NFe sem espaços ou pontos e confirme
* Transmita a NFe novamente na rotina NFe",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],

8=> [
"id" =>9,
"n_rejeicao" => 291,
"titulo" => "Certificado Assinatura Data Validade",
"resolucao" => "Verifique se o Certificado Digital da cliente está vencido. Caso seja necessário, realize novamente a exportação do Certificado Digital e transmita a Nota novamente",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
9=> [
"id" =>10,
"n_rejeicao" => 302,
"titulo" => "Uso Denegado -  Irregularidade fiscal do destinatário",
"resolucao" => "Quem denega o uso da nota fiscal é a SEFAZ, ou seja, não é uma validação realizada pelo produto Serie 1
Não é possivel fazer nada com a Nota enquanto seu uso estiver Denegado. Também não é possivel emitir novas Notas para o cliente até que ele regularize sua situação junto ao SEFAZ
Pela validação da SEFAZ o destinatário da nota está com problema. Se o CNPJ e a IE do destinatário da nota não possuem irregularidades, é necessário entrar em contato com a SEFAZ e verificar o motivo de os mesmos estarem denegando o uso da nota fiscal.",
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
10=> [
"id" =>11,
"n_rejeicao" => 327,
"titulo" => "CFOP inválido para NF-e com finalidade de devolução",
"resolucao" => "Verificar o CFOP utilizado na NFe de Devolução. Se o tipo da Nota (Campo Tipo) for 'Devolução' s descrição da CFOP deve OBRIGATORIAMENTE ser 'Devolução'
Uma solução paliativa para esta questão é emitir uma Nota com o tipo 'Normal' (Campo Tipo = 'Normal'). Neste caso, porém, não é possível buscar o Documento de Origem através de Ações Relacionadas > Origem. O único modo de relacionar o Documento de Origem é através de uma mensagem no campo Mens.Nota"
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
11=> [
"id" =>12,
"n_rejeicao" => 328,
"titulo" => "CFOP de Devolução de Mercadoria para NF-e que não tem finalidade de devolução de Mercadoria",
"resolucao" => 'Verificar o CFOP utilizado na NFe de Devolução. Se o tipo da Nota (Campo Tipo) for "Devolução" s descrição da CFOP deve OBRIGATORIAMENTE ser "Devolução"
-Uma solução paliativa para esta questão é emitir uma Nota com o tipo "Normal" (Campo Tipo = "Normal"). Neste caso, porém, não é possível buscar o Documento de Origem através de Ações Relacionadas > Origem. O único modo de relacionar o Documento de Origem é através de uma mensagem no campo Mens.Nota'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
12=> [
"id" =>13,
"n_rejeicao" => 347,
"titulo" => "Informada IE do substituto tributário em operação que não é interestadual",
"resolucao" => 'Foi emitida uma NF-e de Operação com o Exterior (idDest = 3) ou de Operação Estadual (idDest = 1) e foi informado a IE do Substituto Tributário (IEST)
Verificar o parâmetro MV_SUBTRIB. Verificar se no parâmetro existe uma Inscrição Estadual do mesmo estado do cliente
Excluir a IE e retransmitir a NF',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
13=> [
"id" =>14,
"n_rejeicao" => 355,
"titulo" => "Informar o local de saída do País no caso da exportação",
"resolucao" => 'Ao emitir uma NF de Exportação, verificar se os campos Loc.Emb e UF.Emb do Pedido de Venda estão preenchidos',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
14=> [
"id" =>15,
"n_rejeicao" => 388,
"titulo" => "Código de Situação Tributária do IPI incompatível com o Código de Enquadramento Legal do IPI",
"resolucao" => 'Verificar se os Campos Cal.IPI na aba Impostos e Sit.Trib.IPI na aba Outros estão corrspondentes. Ex: Calc.IPI=MÃO e Sit.Trib.IPI=53 - Saída Não Tributada
Caso o IPI seja calculado (Calc.IPI=SIM) Compare esses valores com as regras definidas pela Sefaz:
* Se Sit.Trib.IPI = "02" ou "52", informar Enquadramento Legal do IPI com um valor entre "301" e "399";
* Se Sit.Trib.IPI = "04" ou "54", informar Enquadramento Legal do IPI com um valor entre "001" e "099";
* Se Sit.Trib.IPI = "05" ou "55", informar Enquadramento Legal do IPI com um valor entre "101" e "199";
* Para os demais casos, informar Enquadramento Legal do IPI com um valor entre "601" e "608" ou "999".',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
15=> [
"id" =>16,
"n_rejeicao" => 481,
"titulo" => "Código Regime Tributário do emitente diverge do cadastro na SEFA",
"resolucao" => 'Verificar se o cliente é optante do Simples Nacional e Verificar se o parâmetro MV_SIMPLES está de acordo',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
16=> [
"id" =>17,
"n_rejeicao" => 501,
"titulo" => "Pedido de Cancelamento intempestivo",
"resolucao" => 'Esta mensagem ocorre quando é solicitado o cancelamento de uma NF-e autorizada a mais de 7 dias. Esta rejeição está sendo retornada pela SEFAZ, portanto deve-se entrar em contato com a mesma para verificar o que fazer neste casOutra solução para estorno desta movimentação é a realização da devolução desta nota fiscal.',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
17=> [
"id" =>18,
"n_rejeicao" => 504,
"titulo" => "Data de Entrada/Saída posterior ao permitido",
"resolucao" =>  'Verificar no campo de Data de Saída do Documento se a data informada é maior do que a Data de Emissão
Excluir o Documento, inclui-lo novamente ou faturar o Pedido de Venda/Compra
A Data de Saída de Uma NF pode ser de até 30 dias posteriores a sua emissão',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
18=> [
"id" =>19,
"n_rejeicao" => 508,
"titulo" => "CST incompatível na operação com Não Contribuinte",
"resolucao" => 'Verificar se o cliente é não contribuinte no cadastro de clientes:
* Tipo = Cons.Final
* Inscrição Estadual vazia
* Campo Contribuinte ICMS = "Não"
Verificar na TES utilizada se o campo Sit.Trib.ICM é igual a um dos valores abaixo:
* 00 Tributada integralmente;
* 20 Com redução da Base de Cálculo;
* 40 Isenta;
* 41 Não tributada;
* 60 ICMS cobrado anteriormente por substituição tributária;',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
19=> [
"id" =>20,
"n_rejeicao" => 521,
"titulo" => "CFOP de Operação Estadual e UF do emitente difere da UF do destinatário para destinatário contribuinte do ICMS",
"resolucao" => 'Na prática, essa validação confronta a UF do endereço do emitente com a UF do destinatário e o CFOP. Caso o CFOP informado iniciar por 1 ou 5 e a operação for interestadual, será retornada a Rejeição
Verificar se o Estado do cliente e do Destinatário da NF são diferentes
Verificar se a CFOP utilizada na NF começa com 1 ou 5
Realizar a alteração e retransmitir o Documento'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
20=> [
"id" =>21,
"n_rejeicao" => 527,
"titulo" => "Operação de Exportação com informação de ICMS incompatível",
"resolucao" => 'Para Notas com CFOP de Exportação (iniciados em 7) a Situração Tributária do ICMS deve estar indicada como 41 - Não tributado. Verificar se o CFOP utiizado inicia com o número 7 e altere o campo Cal.ICMS para "não" e o campo Sit.Trib.ICM para 41. ambos os campos se encontram na aba Impostos da TES',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
21=> [
"id" =>22,
"n_rejeicao" => 539,
"titulo" => "Duplicidade de NF-e com diferença na chave de acesso",
"resolucao" => 'Já foi enviada e autorizada uma Nota Fiscal com mesma numeração. Verificar se a cliente emitiu esta Nota por outros caminhos forma o TOTVS Fly01',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
22=> [
"id" =>23,
"n_rejeicao" => 590,
"titulo" => "Informado CST para emissor do Simples Nacional (CRT=1)",
"resolucao" => 'Verificar se o campo CSOSN encontra-se vazio. Se o cliente for optante do Simples Nacional este campo deve estar preenchido',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
23=> [
"id" =>24,
"n_rejeicao" => 600,
"titulo" => "CSOSN incompatível na operação com Não Contribuinte",
"resolucao" => 'Verificar no cadastro de Pessoa se o Tipo do cliente está indicado como "Consumidor Final", se a Inscrição Estadual está vazia e se o campo Contribuinte ICMS está indicado como "Não"
Verificar no cadastro de TES se o código CSOSN é diferemte da relação abaixo
* 102 - Tributação SN sem permissão de crédito;
* 103 - Tributação SN, com isenção para faixa de receita bruta;
* 300 - Imune;
* 400 - Não tributada pelo Simples Nacional;
* 500 - ICMS cobrado anteriormente por substituição tributária ou por antecipação.
Após corrigir a TES, excluir o Documento gerado e retransmitir a NF'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
24=> [
"id" =>25,
"n_rejeicao" => 610,
"titulo" => "Total da NF difere do somatório dos valores compõe o valor Total da NF",
"resolucao" => 'Quando o total da nota campo vNF for passado um valor com diferença de R$ 0,50 para mais ou para menos do somatório dos campos (vProd - vDesc + vST + vFrete + vSeg + vOutro + vII + vIPI + vServ), A NF será rejeitada após fazer a validação destes valores.
Verificar no arquivo XML se o somatório dos campos abaixo é igual ao total da NF
(vProd - vDesc + vST + vFrete + vSeg + vOutro + vII + vIPI + vServ)
Após corrigir o erro, retransmitir a NF'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
25=> [
"id" =>26,
"n_rejeicao" => 690,
"titulo" => "Pedido de Cancelamento para NF-e com CT-e",
"resolucao" => 'A rejeição ocorre quando a nota fiscal já foi relacionada ao CT-e emitido pela transportadora para acompanhar o transporte da mercadoria.
A Nota pode ser cancelada após o cancelamento da CT-e vinculada
A outra solução seria a realização da devolução desta nota fiscal.',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
26=> [
"id" =>27,
"n_rejeicao" => 694,
"titulo" => "Grupo de ICMS Interestadual para a UF de destino deve ser informado na operação interestadual de venda a consumidor final não contribuinte",
"resolucao" => 'Verificar no cadastro de Pessoa se o Destinatário da NF está indicado como Consumidor Final (Campo Tipo = Cons.Final) e não é intribuinte do ICMS (Campo Contribuinte ICMS=Não)
Verificar no cadastro de TES se o campo Calc.ICMS está indicado como "Não". Caso esteja indicado como "Não", o campo Sit.Trib.ICM deve ser igual a 41 - Não tributado
Caso o cliente seja optante do Simples Nacional, verificar se o CSOSN é igual a 400 - Não tributada pelo Simples Nacional. Caso CSOSN seja igual a 400, o campo Sit.Trib.ICM deve ser igual a 40 - Isenta
Verificar no cadastro da TES se o Campo Mat.Consumo está indicado como "Sim"
Após alterar a TES, excluir o Documento gerado e retransmitir a NF
Caso a alteração tenha sido realizada somente no Cadastro do cliente, basta retransmitir a NF pela rotina NFe',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
27=> [
"id" =>28,
"n_rejeicao" => 696,
"titulo" => " Operação com não contribuinte deve indicar operação com consumidor final",
"resolucao" => 'Verifique se o campo Inscrição Estadual está vazio;
Verificar se os campos Tipo e Contribuinte ICMS no cadastro do cliente estão preenchidos conforme abaixo:
* O campo Tipo deve estar indicado como Cons.Final
* O campo Contribuinte ICMS deve estar indicado como Não
Após preencher os campos corretamente restransmitir a Nota'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
28=> [
"id" =>29,
"n_rejeicao" => 697,
"titulo" => "Alíquota interestadual do ICMS com origem diferente do previsto",
"resolucao" =>'Quando for emitida uma NF-e com Alíquota Interestadual (pICMSInter) igual 4.00% (quatro por cento) e a Origem da Mercadoria for IGUAL a:
0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8;
4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes;
5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40%;
6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural;
7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante lista CAMEX e gás natural.
OU
Quando for emitida uma NF-e com Alíquota Interestadual (pICMSInter) igual a 7.00% (sete por cento) ou 12.00% (doze por cento) e a Origem da Mercadoria for IGUAL a:
1 - Estrangeira - Importação direta, exceto a indicada no código 6; ou
2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7; ou
3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70%; ou
8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70%.
Verificar no XML gerado o valor do campo pICMSInter e alterar a origem do Produto de acordo com os valors acima
Após realizar a alteração, alterar o Pedido de Compra/Venda, alterando o produto para qualquer outro cadastrado e logo em seguida retornando o produto que será transmitido
Caso a Nota tenha sido feita através do Documento de Entrada/Saída, a mesma deve ser feita novamente'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
29=> [
"id" =>30,
"n_rejeicao" => 703,
"titulo" => "Data-Hora de Emissão posterior ao horário de recebimento",
"resolucao" => 'Verificar a Data de Emissão do Documento de Saída, caso seja diferente da data da transmissão, excluir o Documento e lançá-lo novamente
Verificar se o horário do computador que está transmitindo a NF é o mesmo horário do Servidor
Verifique as informações do Horario de Verão no sistema:
* Logado como Administrador Acesse Miscelânea > Configurações > TOTVS Série 1 > Parâmetros
* Busque o parãmetro MV_HRVERAO e verifique se ele está com valor 1 para que a mudança seja feita automaticamente. Caso esteja diferente, coloque 1
* Acesse a rotina de Carta de Correção em Fatuamento > Atualizações > NFe e mude o modo de transmissão para CCe
* Ao acessar a rotina, acesse Ações Relacionadas > Parâmetros
* Verifique o parâmetro Horário de Verão e altere caso esteja incorreto, SIM, caso o cliente esteja em Horário de Vwerão e NÃO caso não esteja
* Transmita a NF novamente'
,
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
30=> [
"id" =>31,
"n_rejeicao" => 772,
"titulo" => "Operação Interestadual e UF de destino igual à UF de origem",
"resolucao" => 'Verificar se o cliente e o Destinatário da Nota são do mesmo Estado. Se forem do mesmo estado, verificar se a CFOP da Nota começa com 5
Alterar a TES para qualquer outra cadastrada e depois retornar a TES que deve ser utilizada no Pedido/documento
Após alterar a TES, faturar o Pedido ou incluir e emitir o Documento novamente',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
31=> [
"id" =>32,
"n_rejeicao" => 773,
"titulo" => "Operação Interna e UF de destino difere da UF de origem",
"resolucao" => 'Verificar se o Destinatário e o cliente são do mesmo Estado.
*Se forem de Estados diferentes, verificar se o CFOP utilizado é diferente de 5
*Caso o CFOP seja igual a 5 e o cliente e o Destinatário da Nota forem de Estados diferentes, o CFOP deve ser alterado',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
32=> [
"id" =>33,
"n_rejeicao" => 778,
"titulo" => "Informado NCM inexistente",
"resolucao" => 'NCM de um dos produtos da NF está incorreto
Orientar a cliente a verificar com seu contados o código NCM correto para aquele produto
Site para consulta de código NCM: http://investexportbrasil.dpr.gov.br/NCM/frmPesquisaNCMFull.aspx
Após corrigir o código NCM, retransmitir a NF pela rotina NFe',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
33=> [
"id" =>34,
"n_rejeicao" => 805,
"titulo" => "A SEFAZ do destinatário não permite Contribuinte Isento de Inscrição Estadual",
"resolucao" => 'Verificar no cadastro do cliente se o campo de Inscrição Estadual está indicado como ISENTO
Deixar o campo em branco e o campo Contribuinte ICMS como NÃO
Retransmitir a NF',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
34=> [
"id" =>35,
"n_rejeicao" => 778,
"titulo" => "Informado NCM inexistente",
"resolucao" => 'NCM de um dos produtos da NF está incorreto
Orientar a cliente a verificar com seu contados o código NCM correto para aquele produto
Site para consulta de código NCM: http://investexportbrasil.dpr.gov.br/NCM/frmPesquisaNCMFull.aspx
Após corrigir o código NCM, retransmitir a NF pela rotina NFe',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,
],
35=> [
"id" =>36,
"n_rejeicao" => 805,
"titulo" => "A SEFAZ do destinatário não permite Contribuinte Isento de Inscrição Estadual",
"resolucao" => 'Verificar no cadastro do cliente se o campo de Inscrição Estadual está indicado como ISENTO
Deixar o campo em branco e o campo Contribuinte ICMS como NÃO
Retransmitir a NF',
"created_at" => "2017-12-01 10:59:29",
"updated_at" => "2017-12-01 10:59:29",
"D_E_L_E_T_E_D" => 0,

] ]);
 }
}
