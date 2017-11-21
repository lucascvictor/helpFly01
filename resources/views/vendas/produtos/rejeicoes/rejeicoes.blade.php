@extends('layouts.default')

@section('title', 'Help Fly01')

@section('content')

<main role="main">

       <div class="jumbotron">
       <table class="table table-striped">
       <thead>
         <tr>
           <th scope="col">Código da rejeição</th>
           <th scope="col">Descrição</th>
         </tr>
       </thead>
       <tbody>
         <tr>
           <td>211</td>
           <td>IE do substituto inválido</td>
         </tr>
         <tr>
           <td>213</td>
           <td>CNPJ-Base do Emitente difere do CNPJ-Base do Certificado Digital</td>
         </tr>
         <tr>
           <td>219</td>
           <td>Circulação da NF-e verificada</td>
         </tr>
         <tr>
           <td>232</td>
           <td>IE do destinatário não vínculad ao CNPJ</td>
         </tr>
         <tr>
           <td>302</td>
           <td>Uso Denegado - Irregularidade fiscal do destinatário</td>
         </tr>
       </tbody>
     </table>
       </div>

     </main>

@endsection
