<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

import Header from '@/Components/Header.vue';
import Footer from '@/Components/Footer.vue';

const showingNavigationDropdown = ref(false);

defineProps({
    canLogin: {
        type: Boolean = false,
    },
    canRegister: {
        type: Boolean = false,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Header :canLogin="canLogin" :canRegister="canRegister" />
    <main>
        <p class="container px-[80px] text-justify py-10">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            Molestias
            nostrum vero,
            quaerat explicabo qui ex
            quisquam impedit iste veritatis dolore cupiditate reprehenderit inventore dolorem tenetur vel minus, earum
            delectus nulla.
            Mollitia architecto sed perferendis obcaecati eos atque et praesentium hic voluptatibus numquam nisi eius,
            cupiditate, in fugiat unde sit optio, debitis quisquam nihil aliquam? Ullam a voluptatum accusamus dolore
            corporis.
            Veniam nihil esse debitis cumque dignissimos vero, facilis, velit nemo architecto repudiandae repellat eius
            provident at dolores deserunt obcaecati eum. Similique minus velit sint iste? Laborum quis exercitationem
            aliquam aliquid.
            Accusamus omnis perspiciatis ipsam quaerat. Atque beatae tenetur architecto obcaecati minima similique itaque
            praesentium laboriosam harum. Neque culpa doloribus voluptas! Eos nulla itaque accusamus optio quia odit libero
            asperiores! Nihil.
            Voluptates ducimus officiis id ab a, eius cum nisi at consequatur enim. Dolore cumque laudantium, minus, eaque
            fuga omnis aut ipsa temporibus reprehenderit totam nostrum nobis natus, ratione laborum earum.
            Deleniti laboriosam repudiandae tempore id quasi quam harum sint earum eum, ab molestias doloremque similique
            ea, minima maiores adipisci ipsa cum hic expedita dolores aut! Ab quae commodi perspiciatis quos?
            Cum quos voluptatem nemo officiis sed enim quis quod aut temporibus nulla iure nam, nisi quae omnis minima
            voluptatum. Dolore alias explicabo, enim hic temporibus sit excepturi voluptatibus dolorem porro.
            Voluptatem distinctio impedit molestiae! Nisi vel tempora, illo iste sint unde adipisci quas illum quae culpa
            expedita rem. Repudiandae beatae quas quos error debitis illo quia dolorem eveniet nostrum quidem!
            Quos tempore porro, sunt tempora magnam excepturi voluptate eveniet laboriosam aliquam rem in, quae atque!
            Beatae dolorem mollitia quisquam atque. Inventore similique repellat reiciendis recusandae ea ex eos,
            consectetur nostrum.
            Esse nihil reprehenderit eveniet earum minus perspiciatis, omnis quis repellat totam porro corrupti odit fugiat
            dolore aliquid nostrum possimus nesciunt! Cumque optio, nihil alias atque expedita officiis nisi consequuntur
            aliquid?
            Itaque possimus illum, consequuntur a ex porro deleniti harum doloribus non tenetur, cum corporis alias odit
            nesciunt eligendi ut ipsam eius, placeat assumenda. Tempore dignissimos earum nulla ab, quos soluta?
            Amet cumque blanditiis sunt similique ad facere, pariatur vel tempore, inventore exercitationem ipsum commodi
            illum ab nemo dolorem quis nesciunt optio aperiam provident aliquid. Numquam inventore tempore autem vel animi?
            Libero autem unde obcaecati vero consequuntur? Ut delectus distinctio deleniti cupiditate, ratione, officia,
            quaerat nobis modi earum eligendi quo expedita. Expedita aliquam, corporis iusto veritatis repellat cupiditate
            molestiae commodi et.
            Maxime, molestias facilis perferendis provident deserunt ad ea excepturi repellendus possimus nam temporibus.
            Minima dicta, officia molestias laboriosam quidem explicabo adipisci provident cupiditate! Enim vel iste rerum
            sequi iure harum?
            Soluta perspiciatis corporis voluptatibus, in totam necessitatibus ab quos illum molestias blanditiis
            repudiandae vel eos, amet ullam inventore natus. Voluptatibus perferendis similique iusto minus culpa ut
            obcaecati sint iste ex.
            Nobis non nam consequatur, iure aliquid, libero numquam doloremque sint mollitia modi, assumenda exercitationem
            eaque explicabo a reprehenderit temporibus? Exercitationem architecto nobis quia consequuntur nam at, officiis
            labore blanditiis eligendi.
            Quaerat aspernatur ut facere molestias sit eaque dolore rerum dignissimos consectetur asperiores dolorem vitae,
            adipisci eos voluptatum facilis doloremque. Hic, nisi aut. Incidunt voluptate provident deserunt accusamus.
            Atque, quibusdam doloremque.
            Eos, beatae vel! Tenetur rem a nihil, nobis cumque deleniti perferendis? Pariatur eligendi itaque non porro
            modi, eum quam voluptates vitae dolorum, sint corrupti adipisci ea tenetur animi illo aliquam?
            Accusantium voluptas consectetur, in vero cumque minus libero hic ex culpa nam esse consequatur beatae expedita,
            quam eius animi tenetur eveniet at, deserunt totam accusamus pariatur iusto! Quo, laudantium quia!
            Quod mollitia sapiente ipsam atque esse itaque commodi eligendi libero aperiam culpa, sit quis dolorem
            distinctio praesentium rerum, veniam voluptates nostrum ullam recusandae! Commodi eum saepe repellat? Quibusdam,
            consectetur deleniti!
            Dicta laudantium odit earum dolores voluptates vitae dolore necessitatibus culpa minima, excepturi aliquid
            delectus deserunt animi id optio? Quam, excepturi? Molestias consequatur quaerat tenetur modi iste debitis
            eligendi sit natus?
            Quo doloremque exercitationem, sunt tenetur fuga quam consectetur nisi voluptate tempore vero voluptatum enim et
            totam at facere quod sequi quia architecto temporibus beatae. Amet eaque odio harum dolorum fugit.
            Provident quasi dolorum repudiandae sint labore nesciunt architecto esse magni. Aspernatur in corporis neque et
            illum atque cum at quo nulla possimus. Voluptatibus cupiditate quis aliquam numquam. Alias, in eius!
            Ipsa, tempora! Nobis saepe in adipisci ad suscipit, vel velit libero molestias fuga magnam aliquid ea nesciunt.
            Aut hic, illo repellendus maiores aliquam dignissimos, animi assumenda quia quaerat tenetur quasi.
            Natus rem quidem nam non odit, excepturi amet ex ipsum assumenda voluptatum reprehenderit eum delectus ullam
            mollitia eligendi? Odit minima provident ratione magnam quidem nam debitis officiis aspernatur voluptas?
            Officia.
            Qui perferendis culpa laudantium quaerat officiis reiciendis nobis illum maxime quibusdam consectetur
            consequatur, tenetur ducimus ab, doloribus quos est et quae. Doloribus eum voluptatem saepe repellendus, et
            reprehenderit facere qui.
            Quis odit ratione aliquid, unde, inventore enim perspiciatis nemo ullam accusantium repudiandae temporibus
            cupiditate vel. Harum neque, qui corrupti laboriosam natus dolorum sint id aut quos, cupiditate tempore minima
            ea.
            Itaque modi beatae neque fuga cupiditate, perspiciatis quos? Ab laboriosam sint excepturi repellat officia,
            numquam ea? Soluta tenetur voluptas dicta hic consectetur ratione aut architecto, exercitationem, esse libero,
            pariatur molestias!
            Vel quaerat voluptate enim aliquam tempore repellat ex modi consequuntur asperiores! Amet deserunt recusandae
            vero pariatur repellendus nisi sint fugiat, rerum porro, voluptatem hic doloribus quam ducimus. Nemo, vero enim!
            Asperiores odit eaque placeat mollitia modi libero, suscipit magni ea eius, inventore adipisci dolore porro
            voluptatem ut quidem, veniam optio earum cum molestiae. Illo voluptas dignissimos beatae perferendis, fugiat
            architecto?
            Veritatis, earum! Aliquid porro a consequuntur nostrum excepturi autem pariatur incidunt doloremque, suscipit
            voluptatibus eaque illum obcaecati dolorem culpa dignissimos est molestiae qui sed perferendis aut quas magni
            voluptatem voluptates.
            Dolor officiis odio fugit esse explicabo facilis vero fuga voluptate vel beatae voluptatem soluta omnis sit
            quaerat molestias placeat eligendi eum necessitatibus exercitationem, minus eveniet, iste tenetur. Reiciendis,
            ipsam perspiciatis.
            Amet delectus quos culpa doloremque nostrum optio molestias odit fuga ea repellat qui est dolores voluptas quo
            porro id, architecto praesentium quaerat cum itaque aut earum veritatis laboriosam quibusdam. Quod!
            Nulla deserunt dolor earum, quaerat ut ipsum aperiam eum debitis harum accusamus, aliquam architecto magnam at
            voluptatibus ratione iusto et suscipit? Quaerat, necessitatibus aliquid. Debitis quae pariatur quia
            exercitationem qui.
            Sed praesentium ut quisquam dignissimos cumque. Eveniet odio aliquid dolorum magni recusandae minima atque
            facere, deserunt quos officiis totam. Quasi eaque exercitationem eveniet temporibus officiis sint nemo odio aut
            deleniti?
            Consequatur, eius. Enim repudiandae hic culpa dolore animi odio perferendis laudantium eveniet, temporibus
            aspernatur. Eligendi, suscipit architecto, magnam reprehenderit in nemo temporibus provident perspiciatis, alias
            excepturi incidunt deserunt accusantium eos?
            Reiciendis voluptatum ex ad voluptate perspiciatis natus cumque dignissimos porro fugit. Velit, ut sed porro
            eaque ad quam magnam blanditiis libero, temporibus ipsum maxime excepturi a saepe nisi praesentium totam.
            Voluptatum tenetur fugit beatae culpa ullam ut provident harum nemo! Quibusdam, inventore eveniet. Vel ipsa,
            labore, velit delectus beatae iusto ea quisquam reprehenderit itaque aliquam qui culpa! Laudantium, odio!
            Provident.
            Corporis et illo repellendus aperiam eveniet architecto, libero omnis impedit doloribus qui quam minima
            perspiciatis sed est porro nulla, odit, error sit quidem quisquam? Est eaque illo dolore reprehenderit ea.
            Cum veritatis voluptates dolor, vitae doloribus corrupti totam ad delectus facere recusandae odit nostrum iure
            inventore aperiam cupiditate amet neque libero! Eos adipisci ipsa dicta in? Accusantium incidunt beatae
            dignissimos.
            Mollitia ipsam neque velit ad consequuntur rem beatae doloribus, amet rerum, blanditiis excepturi sunt
            voluptatum delectus perspiciatis quia alias maiores illo unde. Nesciunt fugit laboriosam fuga eos autem tenetur
            voluptatibus.
            Voluptas suscipit facilis at illum officiis esse consectetur eum eligendi itaque fugiat alias laboriosam,
            dolorem necessitatibus sit perferendis delectus. Eaque tempora, labore reiciendis voluptas porro officia quae
            nobis cum recusandae.
            Doloremque suscipit maiores odio culpa. Tempora neque debitis facere officiis. Modi, distinctio ipsa repellendus
            ipsum quisquam itaque ea. Doloremque ut quam dolor reiciendis commodi placeat, deserunt est voluptate obcaecati
            autem.
            Quaerat sequi exercitationem fugit debitis id voluptatibus quo deserunt nisi doloremque placeat, suscipit enim
            inventore vel distinctio accusantium repellat iure dolores rem dignissimos provident non amet neque soluta!
            Debitis, expedita?
            Ad et accusamus itaque laudantium, sequi sit explicabo, fugiat quibusdam mollitia quod molestias doloribus
            nostrum? Eius quod harum minus obcaecati sequi praesentium tenetur. Et voluptate tempora ipsam placeat provident
            aliquid.
            Similique, ipsa minus pariatur accusantium ea quibusdam commodi doloribus libero cumque voluptatem eligendi
            voluptatibus! Minima laborum beatae doloremque unde necessitatibus, nihil ex deserunt optio exercitationem alias
            architecto excepturi voluptates. Nobis!
            Consectetur vitae velit libero voluptates exercitationem laudantium rem possimus soluta labore iste quo officia
            sequi voluptatem, quibusdam maiores id accusamus. Delectus at quae aspernatur eum ab, vel sapiente quas
            provident.
            Accusamus commodi obcaecati iusto tenetur aut maxime aperiam inventore voluptate nisi delectus, maiores nemo,
            culpa sed dolores. Necessitatibus iure quae amet soluta alias, molestiae asperiores itaque esse repellendus
            fugiat doloribus.
            Reiciendis veniam dolorem, atque amet modi accusamus quibusdam ullam saepe adipisci nisi et soluta aut excepturi
            velit eaque quaerat sit iure alias pariatur at asperiores tempora. Doloribus ea iure dolorum.
            Nobis ullam, aperiam debitis voluptate nostrum laboriosam exercitationem numquam ex ipsam, reprehenderit ut
            fugiat tempora adipisci amet ducimus aliquam maiores voluptas! Laboriosam consequuntur, doloremque tenetur
            sapiente minus inventore assumenda natus.
        </p>
    </main>
    <Footer />
</template>