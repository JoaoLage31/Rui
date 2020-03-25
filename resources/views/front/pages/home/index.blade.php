


@extends('front.layout.app')

@section('content')

@php
    $result = ['0'=>
        [
        'items'=>[[
            'title'=>'I advise companies and NGOs in initiatives and campaigns',
            'description_1'=>'Im a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your page.',
            'description_2'=>'I’m a great place for you to tell a story and let your users know a little more about you. This is a great space to write a long text about your company and your services.',
            'description_3'=>'You can use this space to go into a little more detail about your company. Talk about your team and what services you provide',
            'images'=>['front/media/img/img1.jpg']
    ]
    ]]];
@endphp

@include('front.pages.home.partials.section_1',['data'=>$result])



@php
    $result =
[   
    '0'=>
    [
    'id' =>'0',
    'filter'=>'skills',
    'name'=>'Skills',
    'items'=>[[
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
    ],
    [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>'Diretor Executivo',
        'field_description_1'=>'Associação de Turismo do Porto',
        ]
]],
    '1'=>
        [
        'id' =>'1',
        'filter'=>'Work',
        'name'=>'Work Experience',
        'items'=>[[
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Consultor em  estratégia empresarial
Consultor organizacional e estratégico das Organizações 
da Economia Social',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Consultor em  estratégia empresarial
Consultor organizacional e estratégico das Organizações 
da Economia Social',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Consultor em  estratégia empresarial
Consultor organizacional e estratégico das Organizações 
da Economia Social',
            'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Consultor em  estratégia empresarial
Consultor organizacional e estratégico das Organizações 
da Economia Social',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
]],
    '2'=>
        [
        'id' =>'1',
        'filter'=>'Past',
        'name'=>'Past Experience',
        'items'=>[[
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
            [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>'Coordenador do Gab. de Novos Projectos  da SCMP',
            'field_description_1'=>'Associação de Turismo do Porto',
            ],
]], '3'=>
    [
    'id' =>'2',
    'filter'=>'Education',
    'name'=>'Education',
    'items'=>[
        [
            'field_date_1'=>'Dez 2017 - Atualidade',
            'field_title_1'=>' Chefe de Gabinete do Sec. de Estado da Solidariedade e da Segurança Social no XIX e XX Governo Constitucional',
            'field_description_1'=>'Associação de Turismo do Porto',
    ],
    [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>' Chefe de Gabinete do Sec. de Estado da Solidariedade e da Segurança Social no XIX e XX Governo Constitucional',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>' Chefe de Gabinete do Sec. de Estado da Solidariedade e da Segurança Social no XIX e XX Governo Constitucional',
        'field_description_1'=>'Associação de Turismo do Porto',
        ],
        [
        'field_date_1'=>'Dez 2017 - Atualidade',
        'field_title_1'=>' Chefe de Gabinete do Sec. de Estado da Solidariedade e da Segurança Social no XIX e XX Governo Constitucional',
        'field_description_1'=>'Associação de Turismo do Porto',
        ]
]]];
@endphp

@include('front.pages.home.partials.section_2',['data'=>$result])

@php
    $result = ['0'=>
        [
        'title'=>'events And news',
        'items'=>[[
            'title'=>'Best Events to Go in Porto in January 2020',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],[
            'title'=>'Stay with us',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider2.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
             
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],
    [
            'title'=>'A news report Something',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider3.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
             
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],
    [
            'title'=>'Stay with us',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider4.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
             
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],
    [
            'title'=>'Stay with us',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider2.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
             
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],
    [
            'title'=>'Is this one?',
            'date'=>'25/10/11',
            'images'=>['front/media/img/slider.jpg'],
            'add_info'=>'See More',
            'by'=>'Rui Pedro Gonçalves',
             
            'paragraph_1'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business, trends, news, and more.',
            'paragraph_2'=> 'Welcome to your blog post. Use this space to connect with your readers and potential customers in a way that’s current and interesting. Think of it as an ongoing conversation where you can share updates about business ',
            'paragraph_3'=> 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?',
    ],
]]];
@endphp

@include('front.pages.home.partials.section_3',['data'=>$result])




@include('front.pages.home.partials.section_4')

@endsection

