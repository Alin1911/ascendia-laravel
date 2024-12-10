<ol>
    <li><strong> Adăugarea unei secțiuni pentru colectarea de lead-uri</strong></li>
</ol>
<p><strong>Obiectiv</strong>: Colectarea informațiilor de contact (e.g., adrese de e-mail) de la utilizatorii potențiali
    și menținerea lor implicați cu actualizări despre progresul și lansarea produsului.</p>
<p><strong>Implementare folosind Posthog</strong>:<br /> Posthog a fost configurat pentru a colecta adresele de e-mail
    direct prin urmărirea evenimentelor, atunci c&acirc;nd utilizatorii trimit formularul de lead-uri. Iată pașii
    implementați:</p>
<ul>
    <li><strong>Formular de colectare lead-uri</strong>:</li>
    <ul>
        <li>A fost adăugat un formular pe pagina de destinație pentru a colecta adresele de e-mail.</li>
        <li>La trimiterea formularului, un eveniment personalizat este &icirc;nregistrat &icirc;n Posthog pentru a stoca
            adresa de e-mail furnizată.</li>
    </ul>
</ul>
<p>posthog.capture('Waitlist Submission', {</p>
<p>&nbsp;&nbsp;&nbsp; email: email,&nbsp;</p>
<p>&nbsp;&nbsp;&nbsp; role: role&nbsp;&nbsp;&nbsp;</p>
<p>});</p>
<p><strong>Explicație:</strong></p>
<ol>
    <li><strong>posthog.capture</strong>: Este metoda Posthog folosită pentru a &icirc;nregistra evenimente
        personalizate.</li>
    <li><strong>'Waitlist Submission'</strong>: Numele evenimentului - &nbsp;&icirc;nregistrarea pe lista de așteptare.
    </li>
    <li><strong>email și role</strong>: Proprietăți ale evenimentului care conțin valorile furnizate de utilizator.</li>
</ol>
<p>&nbsp;</p>
<ol start="2">
    <li><strong> Adăugarea analiticii pe pagina de destinație</strong></li>
</ol>
<p><strong>Obiectiv</strong>: Monitorizarea vizitatorilor și comportamentului acestora pentru optimizarea ratei de
    conversie.</p>
<p><strong>Instrumente și Configurare</strong>:</p>
<ol>
    <li><strong>Posthog Web Analytics</strong>:</li>
    <ul>
        <li>Urmărirea numărului de vizitatori pe pagină.</li>
        <li>Identificarea surselor de trafic.</li>
    </ul>
    <img src="{{ asset('storage/images/5_v2.png') }}" class="img-fluid my-1">

    <img src="{{ asset('storage/images/6_v2.png') }}" class="img-fluid my-1">
    <img src="{{ asset('storage/images/7_v2.png') }}" class="img-fluid my-1">
</ol>
<ol start="2">
    <li><strong>Posthog Product Analytics</strong>:</li>
    <ul>
        <li>Configurat un funnel de conversie pentru a măsura:</li>
        <ul>
            <li>Vizitatorii care ajung pe pagină.</li>
            <li>Vizitatorii care interacționează cu formularul.</li>
            <li>Lead-urile colectate (trimiterea formularului).</li>
        </ul>
        <img src="{{ asset('storage/images/8_v2.png') }}" class="img-fluid my-1">
    </ul>
</ol>
<ol start="3">
    <li><strong>Session Replay</strong>:</li>
    <ul>
        <li>Activat pentru a urmări interacțiunile utilizatorilor cu pagina.</li>
        <li>Observarea modului &icirc;n care utilizatorii navighează și identificarea eventualelor blocaje.</li>
    </ul>
    <img src="{{ asset('storage/images/9_v2.png') }}" class="img-fluid my-1">
</ol>
<p><strong>&nbsp;</strong></p>
<ol start="3">
    <li><strong> Atragerea vizitatorilor pe pagina de destinație</strong></li>
</ol>
<p><strong>Obiectiv</strong>: Creșterea traficului și generarea de lead-uri prin diverse canale.</p>
<p><strong>Canale utilizate</strong>:</p>
<ol>
    <li><strong>Mesaje pe WhatsApp</strong>:</li>
    <ul>
        <li>Mesajul cu link-ul către pagina de destinație a fost trimis &icirc;n grupuri de studenți pentru a atrage
            interesul celor interesați de produs.</li>
    </ul>
    <div class="row d-flex justify-content-center">
        <img src="{{ asset('storage/images/1_v2.jpeg') }}" class="img-fluid col-12 col-md-6 col-xl-4 p-1">
        <img src="{{ asset('storage/images/4_v2.jpeg') }}" class="img-fluid col-12 col-md-6 col-xl-4 p-1">
        <img src="{{ asset('storage/images/2_v2.jpeg') }}" class="img-fluid col-12 col-md-6 col-xl-4 p-1">
    </div>
</ol>
<p>&nbsp;</p>
<ol start="2">
    <li><strong>Postări pe Facebook</strong>:</li>
    <ul>
        <li>Link-ul către pagina de destinație a fost distribuit &icirc;n următoarele grupuri:</li>
        <ul>
            <li><em>Freelancer Romania - Social Media Romania</em></li>
            <li><em>IT-Programatori-incepatori-profesionisti</em></li>
            <li><em>Students &amp; Graduates Careers - Romania</em></li>
        </ul>
        <li>Aceste grupuri au fost selectate pentru a atrage at&acirc;t profesioniști, c&acirc;t și studenți sau
            persoane interesate de dezvoltarea de produse digitale.</li>
        <div class="row d-flex justify-content-center">
            <img src="{{ asset('storage/images/3_v2.jpeg') }}" class="img-fluid col-12 col-md-6 col-xl-4 p-1">
        </div>
    </ul>
</ol>
<p>&nbsp;</p>
<p><strong>Rezultate</strong>:</p>
<ul>
    <li>Postările pe Facebook au generat interes semnificativ, mai ales &icirc;n grupurile legate de freelancing și
        cariere.</li>
    <li>Mesajele pe WhatsApp au fost eficiente pentru a crea o conexiune personalizată, gener&acirc;nd o rată ridicată
        de vizite pe link.</li>
</ul>
<p>&nbsp;</p>
<p><strong>Obiectiv</strong>:<br /> Promovarea aplicației <em>Ascendia</em> pentru a atrage utilizatori interesați de
    mentorat sau de a deveni mentori.</p>
<p><strong>Conținutul postării</strong>:</p>
<p>🌟 <em>Looking for a Mentor or Want to Become One?</em> 🌟<br /> Introducing Ascendia&mdash;an app designed to
    connect people seeking mentorship with those ready to share their knowledge and experience. Whether you're looking
    to grow or guide, Ascendia makes it easier than ever!</p>
<p>👉 <em>Check it out here</em>: <a
        href="https://theascendia.phantasmify.com/">https://theascendia.phantasmify.com/</a>
</p>
<p>💡 <em>What do you think?</em><br /> If this sounds like something you'd love to try, tap the link to learn more and
    share your details. We&rsquo;re gathering feedback and building a community of passionate learners and mentors.</p>
<p><em>Let&rsquo;s grow together! </em><em>🚀</em></p>
<p><strong>Analiza Postării</strong>:</p>
<ol>
    <li><strong>Tonul și structura</strong>:</li>
    <ul>
        <li>Ton prietenos și optimist, perfect pentru a atrage atenția.</li>
        <li>Structura este logică: &icirc;ncepe cu o &icirc;ntrebare, prezintă aplicația, include un link și
            &icirc;ncheie cu un &icirc;ndemn la acțiune.</li>
    </ul>
    <li><strong>Call-to-Action (CTA)</strong>:</li>
    <ul>
        <li>&Icirc;ndemnul &bdquo;👉 Check it out here&rdquo; este bine integrat și &icirc;ncurajează utilizatorii să
            acceseze link-ul.</li>
        <li>Mențiunea &bdquo;tap the link to learn more and share your details&rdquo; este clară și invită la acțiune,
            &icirc;nsă ar putea fi mai specifică &icirc;n ceea ce privește ce vor c&acirc;știga utilizatorii.</li>
    </ul>
    <li><strong>Aspecte pozitive</strong>:</li>
    <ul>
        <li>Postarea subliniază utilitatea aplicației (mentorat și dezvoltare personală/profesională).</li>
        <li>Emojis-urile sporesc atractivitatea vizuală a textului.</li>
    </ul>
    <div class="row d-flex justify-content-center">
        <img src="{{ asset('storage/images/10_v2.png') }}" class="img-fluid col-12 col-md-6 col-xl-4 p-1">
    </div>
</ol>
<p><strong>Conținutul postării</strong>:</p>
<p>🚀 <em>Find Your Perfect Mentor with Ascendia! </em><em>🌟</em><br /> Are you ready to level up your skills and
    achieve your goals? Connect with verified mentors who will guide you every step of the way.</p>
<p>✨ <em>Easy mentor search</em><br /> 📅 <em>Flexible scheduling</em><br /> ✅ <em>Trusted experts</em><br /> 💡
    <em>Whatever skill you want to master, your perfect mentor is just a click away.</em>
</p>
<p>👉 <em>Start your journey now</em>: <a
        href="https://theascendia.phantasmify.com/">https://theascendia.phantasmify.com/</a></p>
<p>#Mentorship #PersonalGrowth #CareerGoals</p>
<p><strong>Analiza Postării</strong>:</p>
<ol>
    <li><strong>Tonul și structura</strong>:</li>
    <ul>
        <li>Ton motivațional și optimist, care atrage utilizatorii interesați de dezvoltare.</li>
        <li>Structura clară, cu o introducere captivantă, beneficii enumerate sub formă de bullet points și un
            call-to-action bine definit.</li>
    </ul>
    <li><strong>Call-to-Action (CTA)</strong>:</li>
    <ul>
        <li>&Icirc;ndemnul &bdquo;👉 Start your journey now&rdquo; este clar și atrage utilizatorii spre acțiune
            imediată.</li>
        <li>Link-ul către aplicație este bine evidențiat.</li>
    </ul>
    <li><strong>Aspecte pozitive</strong>:</li>
    <ul>
        <li>Beneficiile aplicației sunt prezentate succint și ușor de &icirc;nțeles.</li>
        <li>Emojis-urile sporesc atractivitatea și creează o atmosferă dinamică.</li>
        <li>Hashtag-urile (#Mentorship, #PersonalGrowth, #CareerGoals) extind audiența postării și facilitează
            descoperirea &icirc;n căutări.</li>
    </ul>
</ol>
