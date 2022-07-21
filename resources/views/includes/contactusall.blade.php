<form class="form f-center" method="POST" action="{{ route('NAA-ContactUsAll.store') }}">
    @csrf
    <input id="inp_name" type="text" name="name" placeholder="Name" data-text="inp_name">
    <input id="inp_mail" type="email" name="email" placeholder="Email" data-text="inp_mail">
    <textarea id="inp_msg" name="message" placeholder="Message" data-text="inp_msg"></textarea>
    <input class="specBtn" id="submit" type="submit" value="Send" data-text>
  </form>
