<!-- Login Modal-->
      <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Login</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="E-mail" class="form-control">
                </div>
                <div class="form-group">
                  <input id="password_modal" type="password" placeholder="Senha" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-sign-in"></i> Log in</button>
                </p>
              </form>
              <p class="text-center text-muted">Ainda não está registrado?</p>
              <p class="text-center text-muted"><a href="customer-register.html"><strong>Crie sua conta agora</strong></a>! É bem fácil, garante acesso a descontos especiais e muito mais!</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Login modal end-->

      <!--- Edit endereço modal -->
      <div id="end-modal" tabindex="-1" role="dialog" aria-labelledby="end-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Endereço</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  Cep:<input id="cep" type="text" placeholder="00000-000" class="form-control">
                </div>
                <div class="form-group">
                  <div class="left-col"><a class="btn btn-secondary mt-0"><i class="fa fa-search"></i> Buscar CEP</a></div>
                </div>
                <div class="form-group">
                  Rua:<input id="rua" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Bairro:<input id="bairro" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Cidade:<input id="cidade" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Estado:<input id="estado" type="text" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-check"></i> Editar endereço de entrega</button>
                </p>
              </form>
              </div>
          </div>
        </div>
      </div>


      <!--- Modal Produto(Delivery) -->
      <div id="product-modal2" tabindex="-1" role="dialog" aria-labelledby="product-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Produto</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <!-- Body do Modal -->
            <div class="modal-body">
              Teste($cod);
              <!-- Colocar a imagem do produto -->
              <img src="{{url('img/meia2.jpg')}}" alt="" class="img-fluid image1" style="padding-left:60px;padding-bottom: 5px;width: 400px;height: 400px;"> 
              <!-- Trazer TODAS as inforamções do produto -->
              <ol>
                <li>ID da Compra: 201808093114982</li>
                <li>Nome do cliente: Carlos Pericles</li>
                <li>E-mail:carlos.pericles@gmail.com</li>
                <li>Endereço: Rua tapajos 230</li>
                <li>Bairro: Jardim Europa</li>
                <li>CEP:213213-213</li>
                <li>Bairro: Jardim Europa</li>
                <li>ID Produto: 44282</li>
                <li>Descrição: Camiseta Manga Curta</li>
                <li>Marca: Nike</li>
                <li>Cor: Preta</li>
                <li>Estoque: 344</li>
              </oi>
            </div>
          </div>
        </div>
      </div>
      <!--
      <!--- Adicionar produto modal -->
      <div id="produto-modal" tabindex="-1" role="dialog" aria-labelledby="end-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Inserir Produto</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <div class="modal-body">
              <form action="customer-orders.html" method="get">
                <div class="form-group">
                  Imagem<input id="file" type="file" class="form-control">
                </div>
                <div class="form-group">
                  Produto:<input id="cep" type="text" placeholder="00000-000" class="form-control">
                </div>
                <div class="form-group">
                  Descrição:<input id="rua" type="text" class="form-control">
                </div>
                <div class="form-group">
                  Modelo: <br>
                  <input type="checkbox" id="modelo_p" > P &nbsp
                  <input type="checkbox" id="modelo_p" > M &nbsp
                  <input type="checkbox" id="modelo_p" > G &nbsp
                  <input type="checkbox" id="modelo_p" > GG &nbsp
                  <input type="checkbox" id="modelo_p" > XG &nbsp
                </div>
                <div class="form-group">
                  Preço:<input id="preco_inserir" type="text" data-thousands="" data-decimal="," class="form-control">
                </div>
                <div class="form-group">
                  Marca:<input id="marca" type="text" class="form-control">
                </div>
                <div class="form-group">
                <select class="js-example-basic-single" name="category">
                  @foreach(App\Category::where("StrActive","Y")->get() as $category)
                  <option value="{{$category->id}}">{{$category->StrName}}</option>
                  @endforeach
                </select>
              </div>
                <p class="text-center">
                  <button class="btn btn-template-outlined"><i class="fa fa-check"></i> Editar endereço de entrega</button>
                </p>
              </form>
              </div>
          </div>
        </div>
      </div>


      <!--- Failure (Delivery) -->
      <div id="failure-modal" tabindex="-1" role="dialog" aria-labelledby="product-modalLabel" aria-hidden="true" class="modal fade">
        <div role="document" class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 id="login-modalLabel" class="modal-title">Produto</h4>
              <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
            </div>
            <!-- Body do Modal -->
            <div class="modal-body">
              
            </div>
          </div>
        </div>
      </div>
