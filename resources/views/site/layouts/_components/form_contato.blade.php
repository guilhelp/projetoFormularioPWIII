{{$slot}}
<form action={{ route('site.contato') }} method="post">
    @csrf
    <input name="nome" type="text" placeholder="Nome" class="borda-preta" required>
    <br>
    <input name="telefone" type="text" placeholder="Telefone" class="borda-preta" required>
    <br>
    <input name="email" type="email" placeholder="E-mail" class="borda-preta" required>
    <br>
    <select name="motivo_contato" class="borda-preta"  required>
        <option value="">Qual o motivo do contato?</option>
        <option value="1">Dúvida</option>
        <option value="2">Elogio</option>
        <option value="3">Reclamação</option>
</select>
    <br>
    <textarea name="mensagem" class="borda-preta" placeholder="Preencha aqui a sua mensagem " required></textarea>
    <br>
    <button type="submit" class="borda-preta">Enviar</button>
</form>

        