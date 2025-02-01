<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="title" content="InfyBonus">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Offline</title>

    <style>
        *,:before,:after{
            box-sizing:border-box;
            border-width:0;
            border-style:solid;
            border-color:#e5e7eb
        }
        :before,:after{
            --tw-content: ""
        }
        html,:host{
            line-height:1.5;
            -webkit-text-size-adjust:100%;
            -moz-tab-size:4;
            -o-tab-size:4;
            tab-size:4;
            font-family:ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";
            font-feature-settings:normal;
            font-variation-settings:normal;
            -webkit-tap-highlight-color:transparent
        }
        body{
            margin:0;
            line-height:inherit
        }
        hr{
            height:0;
            color:inherit;
            border-top-width:1px
        }
        abbr:where([title]){
            -webkit-text-decoration:underline dotted;
            text-decoration:underline dotted
        }
        h1,h2,h3,h4,h5,h6{
            font-size:inherit;
            font-weight:inherit
        }
        a{
            color:inherit;
            text-decoration:inherit
        }
        b,strong{
            font-weight:bolder
        }
        code,kbd,samp,pre{
            font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;
            font-feature-settings:normal;
            font-variation-settings:normal;
            font-size:1em
        }
        small{
            font-size:80%
        }
        sub,sup{
            font-size:75%;
            line-height:0;
            position:relative;
            vertical-align:baseline
        }
        sub{
            bottom:-.25em
        }
        sup{
            top:-.5em
        }
        table{
            text-indent:0;
            border-color:inherit;
            border-collapse:collapse
        }
        button,input,optgroup,select,textarea{
            font-family:inherit;
            font-feature-settings:inherit;
            font-variation-settings:inherit;
            font-size:100%;
            font-weight:inherit;
            line-height:inherit;
            letter-spacing:inherit;
            color:inherit;
            margin:0;
            padding:0
        }
        button,select{
            text-transform:none
        }
        button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){
            -webkit-appearance:button;
            background-color:transparent;
            background-image:none
        }
        :-moz-focusring{
            outline:auto
        }
        :-moz-ui-invalid{
            box-shadow:none
        }
        progress{
            vertical-align:baseline
        }
        ::-webkit-inner-spin-button,::-webkit-outer-spin-button{
            height:auto
        }
        [type=search]{
            -webkit-appearance:textfield;
            outline-offset:-2px
        }
        ::-webkit-search-decoration{
            -webkit-appearance:none
        }
        ::-webkit-file-upload-button{
            -webkit-appearance:button;
            font:inherit
        }
        summary{
            display:list-item
        }
        blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{
            margin:0
        }
        fieldset{
            margin:0;
            padding:0
        }
        legend{
            padding:0
        }
        ol,ul,menu{
            list-style:none;
            margin:0;
            padding:0
        }
        dialog{
            padding:0
        }
        textarea{
            resize:vertical
        }
        input::-moz-placeholder,textarea::-moz-placeholder{
            opacity:1;
            color:#9ca3af
        }
        input::placeholder,textarea::placeholder{
            opacity:1;
            color:#9ca3af
        }
        button,[role=button]{
            cursor:pointer
        }
        :disabled{
            cursor:default
        }
        img,svg,video,canvas,audio,iframe,embed,object{
            display:block;
            vertical-align:middle
        }
        img,video{
            max-width:100%;
            height:auto
        }
        [hidden]{
            display:none
        }
        *{
            margin:0;
            padding:0;
            -webkit-tap-highlight-color:transparent;
            -webkit-user-drag:none;
            -webkit-overflow-scrolling:touch;
            scroll-behavior:smooth!important
        }
        html,h1,h2,h3,h4,h5,h6,p,label{
            font-family:Rubik,sans-serif!important
        }
        .longpress{
            margin:0;
            padding:0;
            -webkit-tap-highlight-color:transparent!important;
            -webkit-user-select:none!important;
            -moz-user-select:none!important;
            -o-user-select:none!important;
            user-select:none!important;
            -webkit-user-drag:none!important;
            -webkit-overflow-scrolling:touch!important;
            scroll-behavior:smooth!important
        }
        .no-scrollbar::-webkit-scrollbar{
            display:none
        }
        .no-scrollbar::-webkit-scrollbar-thumb{
            background-color:transparent
        }
        .no-scrollbar{
            -ms-overflow-style:none;
            scrollbar-width:none;
            scrollbar-width:thin;
            scrollbar-color:transparent transparent
        }
        [x-cloak],[v-cloak]{
            display:none!important
        }
        *,:before,:after{
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: 
        }
        ::backdrop{
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia: ;
            --tw-contain-size: ;
            --tw-contain-layout: ;
            --tw-contain-paint: ;
            --tw-contain-style: 
        }
        .sr-only{
            position:absolute;
            width:1px;
            height:1px;
            padding:0;
            margin:-1px;
            overflow:hidden;
            clip:rect(0,0,0,0);
            white-space:nowrap;
            border-width:0
        }
        .pointer-events-none{
            pointer-events:none
        }
        .pointer-events-auto{
            pointer-events:auto
        }
        .fixed{
            position:fixed
        }
        .absolute{
            position:absolute
        }
        .relative{
            position:relative
        }
        .inset-0{
            top:0;
            right:0;
            bottom:0;
            left:0
        }
        .inset-y-0{
            top:0;
            bottom:0
        }
        .left-0{
            left:0
        }
        .top-0{
            top:0
        }
        .top-16{
            top:4rem
        }
        .z-10{
            z-index:10
        }
        .z-20{
            z-index:20
        }
        .z-30{
            z-index:30
        }
        .z-40{
            z-index:40
        }
        .z-50{
            z-index:50
        }
        .z-\[1000\]{
            z-index:1000
        }
        .m-0{
            margin:0
        }
        .-mx-0{
            margin-left:-0px;
            margin-right:-0px
        }
        .-mx-0\.5{
            margin-left:-.125rem;
            margin-right:-.125rem
        }
        .-mx-px{
            margin-left:-1px;
            margin-right:-1px
        }
        .mx-0{
            margin-left:0;
            margin-right:0
        }
        .mx-16{
            margin-left:4rem;
            margin-right:4rem
        }
        .mx-2{
            margin-left:.5rem;
            margin-right:.5rem
        }
        .mx-3{
            margin-left:.75rem;
            margin-right:.75rem
        }
        .mx-4{
            margin-left:1rem;
            margin-right:1rem
        }
        .mx-6{
            margin-left:1.5rem;
            margin-right:1.5rem
        }
        .mx-auto{
            margin-left:auto;
            margin-right:auto
        }
        .my-1{
            margin-top:.25rem;
            margin-bottom:.25rem
        }
        .my-2{
            margin-top:.5rem;
            margin-bottom:.5rem
        }
        .my-3{
            margin-top:.75rem;
            margin-bottom:.75rem
        }
        .my-4{
            margin-top:1rem;
            margin-bottom:1rem
        }
        .my-auto{
            margin-top:auto;
            margin-bottom:auto
        }
        .-mb-px{
            margin-bottom:-1px
        }
        .mb-0{
            margin-bottom:0
        }
        .mb-1{
            margin-bottom:.25rem
        }
        .mb-10{
            margin-bottom:2.5rem
        }
        .mb-2{
            margin-bottom:.5rem
        }
        .mb-20{
            margin-bottom:5rem
        }
        .mb-3{
            margin-bottom:.75rem
        }
        .mb-4{
            margin-bottom:1rem
        }
        .mb-5{
            margin-bottom:1.25rem
        }
        .mb-6{
            margin-bottom:1.5rem
        }
        .mb-8{
            margin-bottom:2rem
        }
        .ml-3{
            margin-left:.75rem
        }
        .ml-4{
            margin-left:1rem
        }
        .mt-0{
            margin-top:0
        }
        .mt-1{
            margin-top:.25rem
        }
        .mt-10{
            margin-top:2.5rem
        }
        .mt-2{
            margin-top:.5rem
        }
        .mt-3{
            margin-top:.75rem
        }
        .mt-3\.5{
            margin-top:.875rem
        }
        .mt-4{
            margin-top:1rem
        }
        .mt-5{
            margin-top:1.25rem
        }
        .mt-6{
            margin-top:1.5rem
        }
        .block{
            display:block
        }
        .inline-block{
            display:inline-block
        }
        .inline{
            display:inline
        }
        .flex{
            display:flex
        }
        .inline-flex{
            display:inline-flex
        }
        .grid{
            display:grid
        }
        .hidden{
            display:none
        }
        .h-10{
            height:2.5rem
        }
        .h-12{
            height:3rem
        }
        .h-24{
            height:6rem
        }
        .h-3{
            height:.75rem
        }
        .h-32{
            height:8rem
        }
        .h-36{
            height:9rem
        }
        .h-5{
            height:1.25rem
        }
        .h-6{
            height:1.5rem
        }
        .h-8{
            height:2rem
        }
        .h-9{
            height:2.25rem
        }
        .h-\[72px\]{
            height:72px
        }
        .h-full{
            height:100%
        }
        .h-px{
            height:1px
        }
        .h-screen{
            height:100vh
        }
        .min-h-screen{
            min-height:100vh
        }
        .w-0{
            width:0px
        }
        .w-1\/3{
            width:33.333333%
        }
        .w-10{
            width:2.5rem
        }
        .w-24{
            width:6rem
        }
        .w-3{
            width:.75rem
        }
        .w-32{
            width:8rem
        }
        .w-48{
            width:12rem
        }
        .w-5{
            width:1.25rem
        }
        .w-56{
            width:14rem
        }
        .w-6{
            width:1.5rem
        }
        .w-8{
            width:2rem
        }
        .w-9{
            width:2.25rem
        }
        .w-auto{
            width:auto
        }
        .w-full{
            width:100%
        }
        .max-w-2xl{
            max-width:42rem
        }
        .max-w-7xl{
            max-width:80rem
        }
        .max-w-\[15rem\]{
            max-width:15rem
        }
        .max-w-\[86\%\]{
            max-width:86%
        }
        .max-w-full{
            max-width:100%
        }
        .max-w-sm{
            max-width:24rem
        }
        .flex-1{
            flex:1 1 0%
        }
        .flex-auto{
            flex:1 1 auto
        }
        .flex-none{
            flex:none
        }
        .flex-shrink-0{
            flex-shrink:0
        }
        .translate-y-0{
            --tw-translate-y: 0px;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .translate-y-full{
            --tw-translate-y: 100%;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .transform{
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        @keyframes spin{
            to{
                transform:rotate(360deg)
            }
        }
        .animate-spin{
            animation:spin 1s linear infinite
        }
        .cursor-auto{
            cursor:auto
        }
        .cursor-pointer{
            cursor:pointer
        }
        .list-inside{
            list-style-position:inside
        }
        .list-disc{
            list-style-type:disc
        }
        .list-none{
            list-style-type:none
        }
        .flex-row{
            flex-direction:row
        }
        .flex-col{
            flex-direction:column
        }
        .flex-wrap{
            flex-wrap:wrap
        }
        .place-content-center{
            place-content:center
        }
        .place-items-center{
            place-items:center
        }
        .items-start{
            align-items:flex-start
        }
        .items-end{
            align-items:flex-end
        }
        .items-center{
            align-items:center
        }
        .justify-start{
            justify-content:flex-start
        }
        .justify-end{
            justify-content:flex-end
        }
        .justify-center{
            justify-content:center
        }
        .justify-between{
            justify-content:space-between
        }
        .gap-1{
            gap:.25rem
        }
        .gap-2{
            gap:.5rem
        }
        .gap-3{
            gap:.75rem
        }
        .gap-4{
            gap:1rem
        }
        .gap-x-2{
            -moz-column-gap:.5rem;
            column-gap:.5rem
        }
        .gap-x-3{
            -moz-column-gap:.75rem;
            column-gap:.75rem
        }
        .gap-x-4{
            -moz-column-gap:1rem;
            column-gap:1rem
        }
        .gap-y-10{
            row-gap:2.5rem
        }
        .gap-y-12{
            row-gap:3rem
        }
        .gap-y-2{
            row-gap:.5rem
        }
        .space-y-3>:not([hidden])~:not([hidden]){
            --tw-space-y-reverse: 0;
            margin-top:calc(.75rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom:calc(.75rem * var(--tw-space-y-reverse))
        }
        .space-y-5>:not([hidden])~:not([hidden]){
            --tw-space-y-reverse: 0;
            margin-top:calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));
            margin-bottom:calc(1.25rem * var(--tw-space-y-reverse))
        }
        .overflow-hidden{
            overflow:hidden
        }
        .overflow-scroll{
            overflow:scroll
        }
        .overflow-y-hidden{
            overflow-y:hidden
        }
        .overflow-y-scroll{
            overflow-y:scroll
        }
        .scroll-smooth{
            scroll-behavior:smooth
        }
        .whitespace-nowrap{
            white-space:nowrap
        }
        .rounded{
            border-radius:.25rem
        }
        .rounded-2xl{
            border-radius:1rem
        }
        .rounded-3xl{
            border-radius:1.5rem
        }
        .rounded-full{
            border-radius:9999px
        }
        .rounded-lg{
            border-radius:.5rem
        }
        .rounded-md{
            border-radius:.375rem
        }
        .rounded-none{
            border-radius:0
        }
        .rounded-sm{
            border-radius:.125rem
        }
        .rounded-xl{
            border-radius:.75rem
        }
        .rounded-t-sm{
            border-top-left-radius:.125rem;
            border-top-right-radius:.125rem
        }
        .\!border-0{
            border-width:0px!important
        }
        .border{
            border-width:1px
        }
        .border-0{
            border-width:0px
        }
        .border-2{
            border-width:2px
        }
        .border-4{
            border-width:4px
        }
        .border-8{
            border-width:8px
        }
        .border-l{
            border-left-width:1px
        }
        .border-t{
            border-top-width:1px
        }
        .border-solid{
            border-style:solid
        }
        .\!border-green-400{
            --tw-border-opacity: 1 !important;
            border-color:rgb(74 222 128 / var(--tw-border-opacity))!important
        }
        .\!border-primary-600{
            --tw-border-opacity: 1 !important;
            border-color:rgb(37 99 235 / var(--tw-border-opacity))!important
        }
        .\!border-red-400{
            --tw-border-opacity: 1 !important;
            border-color:rgb(248 113 113 / var(--tw-border-opacity))!important
        }
        .border-slate-900\/5{
            border-color:#0f172a0d
        }
        .border-transparent{
            border-color:transparent
        }
        .border-zinc-200{
            --tw-border-opacity: 1;
            border-color:rgb(228 228 231 / var(--tw-border-opacity))
        }
        .border-zinc-200\/60{
            border-color:#e4e4e799
        }
        .border-zinc-300{
            --tw-border-opacity: 1;
            border-color:rgb(212 212 216 / var(--tw-border-opacity))
        }
        .border-zinc-400{
            --tw-border-opacity: 1;
            border-color:rgb(161 161 170 / var(--tw-border-opacity))
        }
        .border-zinc-600{
            --tw-border-opacity: 1;
            border-color:rgb(82 82 91 / var(--tw-border-opacity))
        }
        .border-zinc-900\/5{
            border-color:#18181b0d
        }
        .bg-black{
            --tw-bg-opacity: 1;
            background-color:rgb(0 0 0 / var(--tw-bg-opacity))
        }
        .bg-black\/50{
            background-color:#00000080
        }
        .bg-danger-600{
            --tw-bg-opacity: 1;
            background-color:rgb(220 38 38 / var(--tw-bg-opacity))
        }
        .bg-green-100{
            --tw-bg-opacity: 1;
            background-color:rgb(220 252 231 / var(--tw-bg-opacity))
        }
        .bg-info-600{
            --tw-bg-opacity: 1;
            background-color:rgb(37 99 235 / var(--tw-bg-opacity))
        }
        .bg-primary-500{
            --tw-bg-opacity: 1;
            background-color:rgb(59 130 246 / var(--tw-bg-opacity))
        }
        .bg-red-100{
            --tw-bg-opacity: 1;
            background-color:rgb(254 226 226 / var(--tw-bg-opacity))
        }
        .bg-secondary-600{
            --tw-bg-opacity: 1;
            background-color:rgb(75 85 99 / var(--tw-bg-opacity))
        }
        .bg-stone-50{
            --tw-bg-opacity: 1;
            background-color:rgb(250 250 249 / var(--tw-bg-opacity))
        }
        .bg-success-600{
            --tw-bg-opacity: 1;
            background-color:rgb(5 150 105 / var(--tw-bg-opacity))
        }
        .bg-transparent{
            background-color:transparent
        }
        .bg-warning-600{
            --tw-bg-opacity: 1;
            background-color:rgb(217 119 6 / var(--tw-bg-opacity))
        }
        .bg-white{
            --tw-bg-opacity: 1;
            background-color:rgb(255 255 255 / var(--tw-bg-opacity))
        }
        .bg-zinc-200{
            --tw-bg-opacity: 1;
            background-color:rgb(228 228 231 / var(--tw-bg-opacity))
        }
        .bg-zinc-50{
            --tw-bg-opacity: 1;
            background-color:rgb(250 250 250 / var(--tw-bg-opacity))
        }
        .bg-zinc-900{
            --tw-bg-opacity: 1;
            background-color:rgb(24 24 27 / var(--tw-bg-opacity))
        }
        .bg-opacity-25{
            --tw-bg-opacity: .25
        }
        .bg-opacity-50{
            --tw-bg-opacity: .5
        }
        .bg-opacity-90{
            --tw-bg-opacity: .9
        }
        .bg-gradient-to-br{
            background-image:linear-gradient(to bottom right,var(--tw-gradient-stops))
        }
        .from-zinc-50{
            --tw-gradient-from: #fafafa var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(250 250 250 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .from-zinc-900{
            --tw-gradient-from: #18181b var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .via-zinc-500{
            --tw-gradient-to: rgb(113 113 122 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #71717a var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .to-zinc-200{
            --tw-gradient-to: #e4e4e7 var(--tw-gradient-to-position)
        }
        .bg-cover{
            background-size:cover
        }
        .fill-zinc-50{
            fill:#fafafa
        }
        .fill-zinc-900{
            fill:#18181b
        }
        .object-cover{
            -o-object-fit:cover;
            object-fit:cover
        }
        .p-0{
            padding:0
        }
        .p-1{
            padding:.25rem
        }
        .p-2{
            padding:.5rem
        }
        .p-4{
            padding:1rem
        }
        .p-5{
            padding:1.25rem
        }
        .px-0{
            padding-left:0;
            padding-right:0
        }
        .px-1{
            padding-left:.25rem;
            padding-right:.25rem
        }
        .px-3{
            padding-left:.75rem;
            padding-right:.75rem
        }
        .px-4{
            padding-left:1rem;
            padding-right:1rem
        }
        .px-6{
            padding-left:1.5rem;
            padding-right:1.5rem
        }
        .py-12{
            padding-top:3rem;
            padding-bottom:3rem
        }
        .py-2{
            padding-top:.5rem;
            padding-bottom:.5rem
        }
        .py-3{
            padding-top:.75rem;
            padding-bottom:.75rem
        }
        .py-3\.5{
            padding-top:.875rem;
            padding-bottom:.875rem
        }
        .py-4{
            padding-top:1rem;
            padding-bottom:1rem
        }
        .py-5{
            padding-top:1.25rem;
            padding-bottom:1.25rem
        }
        .py-6{
            padding-top:1.5rem;
            padding-bottom:1.5rem
        }
        .py-8{
            padding-top:2rem;
            padding-bottom:2rem
        }
        .pb-0{
            padding-bottom:0
        }
        .pb-10{
            padding-bottom:2.5rem
        }
        .pb-12{
            padding-bottom:3rem
        }
        .pb-2{
            padding-bottom:.5rem
        }
        .pt-0{
            padding-top:0
        }
        .pt-0\.5{
            padding-top:.125rem
        }
        .pt-10{
            padding-top:2.5rem
        }
        .pt-4{
            padding-top:1rem
        }
        .text-center{
            text-align:center
        }
        .text-right{
            text-align:right
        }
        .text-start{
            text-align:start
        }
        .text-end{
            text-align:end
        }
        .align-middle{
            vertical-align:middle
        }
        .text-2xl{
            font-size:1.5rem;
            line-height:2rem
        }
        .text-3xl{
            font-size:1.875rem;
            line-height:2.25rem
        }
        .text-4xl{
            font-size:2.25rem;
            line-height:2.5rem
        }
        .text-5xl{
            font-size:3rem;
            line-height:1
        }
        .text-6xl{
            font-size:3.75rem;
            line-height:1
        }
        .text-9xl{
            font-size:8rem;
            line-height:1
        }
        .text-base{
            font-size:1rem;
            line-height:1.5rem
        }
        .text-lg{
            font-size:1.125rem;
            line-height:1.75rem
        }
        .text-sm{
            font-size:.875rem;
            line-height:1.25rem
        }
        .text-xl{
            font-size:1.25rem;
            line-height:1.75rem
        }
        .text-xs{
            font-size:.75rem;
            line-height:1rem
        }
        .font-bold{
            font-weight:700
        }
        .font-extrabold{
            font-weight:800
        }
        .font-medium{
            font-weight:500
        }
        .capitalize{
            text-transform:capitalize
        }
        .italic{
            font-style:italic
        }
        .leading-10{
            line-height:2.5rem
        }
        .leading-4{
            line-height:1rem
        }
        .leading-5{
            line-height:1.25rem
        }
        .leading-6{
            line-height:1.5rem
        }
        .leading-7{
            line-height:1.75rem
        }
        .leading-9{
            line-height:2.25rem
        }
        .\!text-green-400{
            --tw-text-opacity: 1 !important;
            color:rgb(74 222 128 / var(--tw-text-opacity))!important
        }
        .\!text-red-400{
            --tw-text-opacity: 1 !important;
            color:rgb(248 113 113 / var(--tw-text-opacity))!important
        }
        .text-black{
            --tw-text-opacity: 1;
            color:rgb(0 0 0 / var(--tw-text-opacity))
        }
        .text-black\/75{
            color:#000000bf
        }
        .text-blue-500{
            --tw-text-opacity: 1;
            color:rgb(59 130 246 / var(--tw-text-opacity))
        }
        .text-blue-700{
            --tw-text-opacity: 1;
            color:rgb(29 78 216 / var(--tw-text-opacity))
        }
        .text-gray-100{
            --tw-text-opacity: 1;
            color:rgb(243 244 246 / var(--tw-text-opacity))
        }
        .text-gray-300{
            --tw-text-opacity: 1;
            color:rgb(209 213 219 / var(--tw-text-opacity))
        }
        .text-gray-400{
            --tw-text-opacity: 1;
            color:rgb(156 163 175 / var(--tw-text-opacity))
        }
        .text-gray-500{
            --tw-text-opacity: 1;
            color:rgb(107 114 128 / var(--tw-text-opacity))
        }
        .text-green-400{
            --tw-text-opacity: 1;
            color:rgb(74 222 128 / var(--tw-text-opacity))
        }
        .text-green-800{
            --tw-text-opacity: 1;
            color:rgb(22 101 52 / var(--tw-text-opacity))
        }
        .text-indigo-600{
            --tw-text-opacity: 1;
            color:rgb(79 70 229 / var(--tw-text-opacity))
        }
        .text-neutral-700{
            --tw-text-opacity: 1;
            color:rgb(64 64 64 / var(--tw-text-opacity))
        }
        .text-red-400{
            --tw-text-opacity: 1;
            color:rgb(248 113 113 / var(--tw-text-opacity))
        }
        .text-red-500\/75{
            color:#ef4444bf
        }
        .text-red-600{
            --tw-text-opacity: 1;
            color:rgb(220 38 38 / var(--tw-text-opacity))
        }
        .text-red-800{
            --tw-text-opacity: 1;
            color:rgb(153 27 27 / var(--tw-text-opacity))
        }
        .text-sky-100{
            --tw-text-opacity: 1;
            color:rgb(224 242 254 / var(--tw-text-opacity))
        }
        .text-stone-500{
            --tw-text-opacity: 1;
            color:rgb(120 113 108 / var(--tw-text-opacity))
        }
        .text-teal-900{
            --tw-text-opacity: 1;
            color:rgb(19 78 74 / var(--tw-text-opacity))
        }
        .text-white{
            --tw-text-opacity: 1;
            color:rgb(255 255 255 / var(--tw-text-opacity))
        }
        .text-zinc-400{
            --tw-text-opacity: 1;
            color:rgb(161 161 170 / var(--tw-text-opacity))
        }
        .text-zinc-50{
            --tw-text-opacity: 1;
            color:rgb(250 250 250 / var(--tw-text-opacity))
        }
        .text-zinc-500{
            --tw-text-opacity: 1;
            color:rgb(113 113 122 / var(--tw-text-opacity))
        }
        .text-zinc-600{
            --tw-text-opacity: 1;
            color:rgb(82 82 91 / var(--tw-text-opacity))
        }
        .text-zinc-900{
            --tw-text-opacity: 1;
            color:rgb(24 24 27 / var(--tw-text-opacity))
        }
        .underline{
            text-decoration-line:underline
        }
        .no-underline{
            text-decoration-line:none
        }
        .placeholder-zinc-400::-moz-placeholder{
            --tw-placeholder-opacity: 1;
            color:rgb(161 161 170 / var(--tw-placeholder-opacity))
        }
        .placeholder-zinc-400::placeholder{
            --tw-placeholder-opacity: 1;
            color:rgb(161 161 170 / var(--tw-placeholder-opacity))
        }
        .opacity-0{
            opacity:0
        }
        .opacity-100{
            opacity:1
        }
        .opacity-25{
            opacity:.25
        }
        .opacity-75{
            opacity:.75
        }
        .\!shadow-none{
            --tw-shadow: 0 0 #0000 !important;
            --tw-shadow-colored: 0 0 #0000 !important;
            box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)!important
        }
        .shadow{
            --tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);
            box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
        }
        .shadow-lg{
            --tw-shadow: 0 10px 15px -3px rgb(0 0 0 / .1), 0 4px 6px -4px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);
            box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
        }
        .shadow-sm{
            --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
            --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
            box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
        }
        .shadow-xl{
            --tw-shadow: 0 20px 25px -5px rgb(0 0 0 / .1), 0 8px 10px -6px rgb(0 0 0 / .1);
            --tw-shadow-colored: 0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);
            box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)
        }
        .shadow-zinc-50\/5{
            --tw-shadow-color: rgb(250 250 250 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .shadow-zinc-500\/5{
            --tw-shadow-color: rgb(113 113 122 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .shadow-zinc-600\/5{
            --tw-shadow-color: rgb(82 82 91 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .ring-1{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
        }
        .ring-black{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity))
        }
        .ring-opacity-5{
            --tw-ring-opacity: .05
        }
        .filter{
            filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
        }
        .transition{
            transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;
            transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;
            transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;
            transition-timing-function:cubic-bezier(.4,0,.2,1);
            transition-duration:.15s
        }
        .transition-all{
            transition-property:all;
            transition-timing-function:cubic-bezier(.4,0,.2,1);
            transition-duration:.15s
        }
        .transition-opacity{
            transition-property:opacity;
            transition-timing-function:cubic-bezier(.4,0,.2,1);
            transition-duration:.15s
        }
        .transition-transform{
            transition-property:transform;
            transition-timing-function:cubic-bezier(.4,0,.2,1);
            transition-duration:.15s
        }
        .duration-100{
            transition-duration:.1s
        }
        .duration-150{
            transition-duration:.15s
        }
        .duration-300{
            transition-duration:.3s
        }
        .duration-500{
            transition-duration:.5s
        }
        .duration-700{
            transition-duration:.7s
        }
        .ease-in{
            transition-timing-function:cubic-bezier(.4,0,1,1)
        }
        .ease-in-out{
            transition-timing-function:cubic-bezier(.4,0,.2,1)
        }
        .ease-out{
            transition-timing-function:cubic-bezier(0,0,.2,1)
        }
        .before\:absolute:before{
            content:var(--tw-content);
            position:absolute
        }
        .before\:inset-0:before{
            content:var(--tw-content);
            top:0;
            right:0;
            bottom:0;
            left:0
        }
        .before\:-translate-x-full:before{
            content:var(--tw-content);
            --tw-translate-x: -100%;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .before\:-skew-x-12:before{
            content:var(--tw-content);
            --tw-skew-x: -12deg;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        @keyframes shimmer{
            to{
                content:var(--tw-content);
                transform:translate(100%)
            }
        }
        .before\:animate-\[shimmer_2s_infinite\]:before{
            content:var(--tw-content);
            animation:shimmer 2s infinite
        }
        .before\:border-t:before{
            content:var(--tw-content);
            border-top-width:1px
        }
        .before\:border-zinc-900\/10:before{
            content:var(--tw-content);
            border-color:#18181b1a
        }
        .before\:bg-gradient-to-r:before{
            content:var(--tw-content);
            background-image:linear-gradient(to right,var(--tw-gradient-stops))
        }
        .before\:from-transparent:before{
            content:var(--tw-content);
            --tw-gradient-from: transparent var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .before\:via-zinc-900\/10:before{
            content:var(--tw-content);
            --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), rgb(24 24 27 / .1) var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .before\:to-transparent:before{
            content:var(--tw-content);
            --tw-gradient-to: transparent var(--tw-gradient-to-position)
        }
        .hover\:\!bg-zinc-100:hover{
            --tw-bg-opacity: 1 !important;
            background-color:rgb(244 244 245 / var(--tw-bg-opacity))!important
        }
        .hover\:bg-zinc-200:hover{
            --tw-bg-opacity: 1;
            background-color:rgb(228 228 231 / var(--tw-bg-opacity))
        }
        .hover\:bg-opacity-25:hover{
            --tw-bg-opacity: .25
        }
        .hover\:text-red-500:hover{
            --tw-text-opacity: 1;
            color:rgb(239 68 68 / var(--tw-text-opacity))
        }
        .hover\:text-zinc-400:hover{
            --tw-text-opacity: 1;
            color:rgb(161 161 170 / var(--tw-text-opacity))
        }
        .hover\:opacity-80:hover{
            opacity:.8
        }
        .hover\:ease-in:hover{
            transition-timing-function:cubic-bezier(.4,0,1,1)
        }
        .focus\:border-primary-400:focus{
            --tw-border-opacity: 1;
            border-color:rgb(96 165 250 / var(--tw-border-opacity))
        }
        .focus\:outline-none:focus{
            outline:2px solid transparent;
            outline-offset:2px
        }
        .focus\:ring-2:focus{
            --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
            --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);
            box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)
        }
        .focus\:ring-primary-400:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(96 165 250 / var(--tw-ring-opacity))
        }
        .focus\:ring-red-500:focus{
            --tw-ring-opacity: 1;
            --tw-ring-color: rgb(239 68 68 / var(--tw-ring-opacity))
        }
        .focus\:ring-offset-2:focus{
            --tw-ring-offset-width: 2px
        }
        .disabled\:opacity-70:disabled{
            opacity:.7
        }
        .dark\:block:is(.dark *){
            display:block
        }
        .dark\:hidden:is(.dark *){
            display:none
        }
        .dark\:\!border-primary-500:is(.dark *){
            --tw-border-opacity: 1 !important;
            border-color:rgb(59 130 246 / var(--tw-border-opacity))!important
        }
        .dark\:border-slate-50\/5:is(.dark *){
            border-color:#f8fafc0d
        }
        .dark\:border-zinc-300\/5:is(.dark *){
            border-color:#d4d4d80d
        }
        .dark\:border-zinc-400:is(.dark *){
            --tw-border-opacity: 1;
            border-color:rgb(161 161 170 / var(--tw-border-opacity))
        }
        .dark\:border-zinc-50\/5:is(.dark *){
            border-color:#fafafa0d
        }
        .dark\:border-zinc-500:is(.dark *){
            --tw-border-opacity: 1;
            border-color:rgb(113 113 122 / var(--tw-border-opacity))
        }
        .dark\:border-zinc-600:is(.dark *){
            --tw-border-opacity: 1;
            border-color:rgb(82 82 91 / var(--tw-border-opacity))
        }
        .dark\:border-zinc-700:is(.dark *){
            --tw-border-opacity: 1;
            border-color:rgb(63 63 70 / var(--tw-border-opacity))
        }
        .dark\:border-zinc-800:is(.dark *){
            --tw-border-opacity: 1;
            border-color:rgb(39 39 42 / var(--tw-border-opacity))
        }
        .dark\:bg-danger-500:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(239 68 68 / var(--tw-bg-opacity))
        }
        .dark\:bg-info-500:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(59 130 246 / var(--tw-bg-opacity))
        }
        .dark\:bg-primary-600:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(37 99 235 / var(--tw-bg-opacity))
        }
        .dark\:bg-secondary-500:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(107 114 128 / var(--tw-bg-opacity))
        }
        .dark\:bg-success-500:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(16 185 129 / var(--tw-bg-opacity))
        }
        .dark\:bg-warning-500:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(245 158 11 / var(--tw-bg-opacity))
        }
        .dark\:bg-zinc-100:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(244 244 245 / var(--tw-bg-opacity))
        }
        .dark\:bg-zinc-700:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(63 63 70 / var(--tw-bg-opacity))
        }
        .dark\:bg-zinc-800:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(39 39 42 / var(--tw-bg-opacity))
        }
        .dark\:bg-zinc-900:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(24 24 27 / var(--tw-bg-opacity))
        }
        .dark\:from-zinc-100:is(.dark *){
            --tw-gradient-from: #f4f4f5 var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(244 244 245 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .dark\:from-zinc-900:is(.dark *){
            --tw-gradient-from: #18181b var(--tw-gradient-from-position);
            --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
        }
        .dark\:via-zinc-300:is(.dark *){
            --tw-gradient-to: rgb(212 212 216 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), #d4d4d8 var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .dark\:to-zinc-700:is(.dark *){
            --tw-gradient-to: #3f3f46 var(--tw-gradient-to-position)
        }
        .dark\:fill-zinc-50:is(.dark *){
            fill:#fafafa
        }
        .dark\:text-black:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(0 0 0 / var(--tw-text-opacity))
        }
        .dark\:text-blue-500:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(59 130 246 / var(--tw-text-opacity))
        }
        .dark\:text-gray-400:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(156 163 175 / var(--tw-text-opacity))
        }
        .dark\:text-gray-600:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(75 85 99 / var(--tw-text-opacity))
        }
        .dark\:text-indigo-400:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(129 140 248 / var(--tw-text-opacity))
        }
        .dark\:text-red-400:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(248 113 113 / var(--tw-text-opacity))
        }
        .dark\:text-white:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(255 255 255 / var(--tw-text-opacity))
        }
        .dark\:text-zinc-100:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(244 244 245 / var(--tw-text-opacity))
        }
        .dark\:text-zinc-300:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(212 212 216 / var(--tw-text-opacity))
        }
        .dark\:text-zinc-400:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(161 161 170 / var(--tw-text-opacity))
        }
        .dark\:text-zinc-50:is(.dark *){
            --tw-text-opacity: 1;
            color:rgb(250 250 250 / var(--tw-text-opacity))
        }
        .dark\:placeholder-zinc-400:is(.dark *)::-moz-placeholder{
            --tw-placeholder-opacity: 1;
            color:rgb(161 161 170 / var(--tw-placeholder-opacity))
        }
        .dark\:placeholder-zinc-400:is(.dark *)::placeholder{
            --tw-placeholder-opacity: 1;
            color:rgb(161 161 170 / var(--tw-placeholder-opacity))
        }
        .dark\:shadow-zinc-400\/5:is(.dark *){
            --tw-shadow-color: rgb(161 161 170 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .dark\:shadow-zinc-500\/5:is(.dark *){
            --tw-shadow-color: rgb(113 113 122 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .dark\:shadow-zinc-800:is(.dark *){
            --tw-shadow-color: #27272a;
            --tw-shadow: var(--tw-shadow-colored)
        }
        .dark\:shadow-zinc-900\/5:is(.dark *){
            --tw-shadow-color: rgb(24 24 27 / .05);
            --tw-shadow: var(--tw-shadow-colored)
        }
        .dark\:before\:border-zinc-50\/10:is(.dark *):before{
            content:var(--tw-content);
            border-color:#fafafa1a
        }
        .dark\:before\:via-zinc-50\/10:is(.dark *):before{
            content:var(--tw-content);
            --tw-gradient-to: rgb(250 250 250 / 0) var(--tw-gradient-to-position);
            --tw-gradient-stops: var(--tw-gradient-from), rgb(250 250 250 / .1) var(--tw-gradient-via-position), var(--tw-gradient-to)
        }
        .dark\:hover\:bg-zinc-800:hover:is(.dark *){
            --tw-bg-opacity: 1;
            background-color:rgb(39 39 42 / var(--tw-bg-opacity))
        }
        .hover\:dark\:\!bg-zinc-800:is(.dark *):hover{
            --tw-bg-opacity: 1 !important;
            background-color:rgb(39 39 42 / var(--tw-bg-opacity))!important
        }
        @media (min-width: 320px){
            .sm\:fixed{
                position:fixed
            }
            .sm\:\!bottom-0{
                bottom:0!important
            }
            .sm\:top-10{
                top:2.5rem
            }
            .sm\:mx-4{
                margin-left:1rem;
                margin-right:1rem
            }
            .sm\:my-4{
                margin-top:1rem;
                margin-bottom:1rem
            }
            .sm\:mb-8{
                margin-bottom:2rem
            }
            .sm\:h-10{
                height:2.5rem
            }
            .sm\:max-h-\[96\%\]{
                max-height:96%
            }
            .sm\:w-full{
                width:100%
            }
            .sm\:flex-col{
                flex-direction:column
            }
            .sm\:items-start{
                align-items:flex-start
            }
            .sm\:justify-end{
                justify-content:flex-end
            }
            .sm\:\!rounded-b-none{
                border-bottom-right-radius:0!important;
                border-bottom-left-radius:0!important
            }
            .sm\:\!rounded-t-3xl{
                border-top-left-radius:1.5rem!important;
                border-top-right-radius:1.5rem!important
            }
            .sm\:\!border-0{
                border-width:0px!important
            }
            .sm\:p-2{
                padding:.5rem
            }
            .sm\:p-4{
                padding:1rem
            }
            .sm\:p-5{
                padding:1.25rem
            }
            .sm\:p-6{
                padding:1.5rem
            }
            .sm\:px-16{
                padding-left:4rem;
                padding-right:4rem
            }
            .sm\:px-2{
                padding-left:.5rem;
                padding-right:.5rem
            }
            .sm\:px-4{
                padding-left:1rem;
                padding-right:1rem
            }
            .sm\:pt-16{
                padding-top:4rem
            }
            .sm\:pt-4{
                padding-top:1rem
            }
            .sm\:text-4xl{
                font-size:2.25rem;
                line-height:2.5rem
            }
            .sm\:text-sm{
                font-size:.875rem;
                line-height:1.25rem
            }
            .sm\:leading-10{
                line-height:2.5rem
            }
        }
        @media (min-width: 768px){
            .md\:fixed{
                position:fixed
            }
            .md\:\!bottom-0{
                bottom:0!important
            }
            .md\:top-10{
                top:2.5rem
            }
            .md\:mx-8{
                margin-left:2rem;
                margin-right:2rem
            }
            .md\:my-8{
                margin-top:2rem;
                margin-bottom:2rem
            }
            .md\:mb-10{
                margin-bottom:2.5rem
            }
            .md\:max-h-\[96\%\]{
                max-height:96%
            }
            .md\:w-full{
                width:100%
            }
            .md\:flex-col{
                flex-direction:column
            }
            .md\:gap-8{
                gap:2rem
            }
            .md\:\!rounded-b-none{
                border-bottom-right-radius:0!important;
                border-bottom-left-radius:0!important
            }
            .md\:\!rounded-t-3xl{
                border-top-left-radius:1.5rem!important;
                border-top-right-radius:1.5rem!important
            }
            .md\:\!border-0{
                border-width:0px!important
            }
            .md\:bg-bottom{
                background-position:bottom
            }
            .md\:p-4{
                padding:1rem
            }
            .md\:p-6{
                padding:1.5rem
            }
            .md\:px-16{
                padding-left:4rem;
                padding-right:4rem
            }
            .md\:px-2{
                padding-left:.5rem;
                padding-right:.5rem
            }
            .md\:px-4{
                padding-left:1rem;
                padding-right:1rem
            }
            .md\:pt-6{
                padding-top:1.5rem
            }
            .md\:text-2xl{
                font-size:1.5rem;
                line-height:2rem
            }
            .md\:text-3xl{
                font-size:1.875rem;
                line-height:2.25rem
            }
            .md\:text-4xl{
                font-size:2.25rem;
                line-height:2.5rem
            }
            .md\:text-5xl{
                font-size:3rem;
                line-height:1
            }
            .md\:text-6xl{
                font-size:3.75rem;
                line-height:1
            }
            .md\:text-lg{
                font-size:1.125rem;
                line-height:1.75rem
            }
            .md\:text-sm{
                font-size:.875rem;
                line-height:1.25rem
            }
            .md\:text-xl{
                font-size:1.25rem;
                line-height:1.75rem
            }
        }
        @media (min-width: 1024px){
            .lg\:static{
                position:static
            }
            .lg\:relative{
                position:relative
            }
            .lg\:top-12{
                top:3rem
            }
            .lg\:mx-12{
                margin-left:3rem;
                margin-right:3rem
            }
            .lg\:my-12{
                margin-top:3rem;
                margin-bottom:3rem
            }
            .lg\:my-4{
                margin-top:1rem;
                margin-bottom:1rem
            }
            .lg\:mb-0{
                margin-bottom:0
            }
            .lg\:mt-12{
                margin-top:3rem
            }
            .lg\:grid{
                display:grid
            }
            .lg\:hidden{
                display:none
            }
            .lg\:max-h-\[94\%\]{
                max-height:94%
            }
            .lg\:w-1\/2{
                width:50%
            }
            .lg\:grid-cols-2{
                grid-template-columns:repeat(2,minmax(0,1fr))
            }
            .lg\:flex-row{
                flex-direction:row
            }
            .lg\:gap-2{
                gap:.5rem
            }
            .lg\:gap-4{
                gap:1rem
            }
            .lg\:self-center{
                align-self:center
            }
            .lg\:\!rounded-2xl{
                border-radius:1rem!important
            }
            .lg\:p-6{
                padding:1.5rem
            }
            .lg\:p-8{
                padding:2rem
            }
            .lg\:px-24{
                padding-left:6rem;
                padding-right:6rem
            }
            .lg\:px-4{
                padding-left:1rem;
                padding-right:1rem
            }
            .lg\:px-6{
                padding-left:1.5rem;
                padding-right:1.5rem
            }
            .lg\:py-16{
                padding-top:4rem;
                padding-bottom:4rem
            }
            .lg\:py-5{
                padding-top:1.25rem;
                padding-bottom:1.25rem
            }
            .lg\:pr-0{
                padding-right:0
            }
            .lg\:pt-8{
                padding-top:2rem
            }
            .lg\:text-2xl{
                font-size:1.5rem;
                line-height:2rem
            }
            .lg\:text-3xl{
                font-size:1.875rem;
                line-height:2.25rem
            }
            .lg\:text-4xl{
                font-size:2.25rem;
                line-height:2.5rem
            }
            .lg\:text-5xl{
                font-size:3rem;
                line-height:1
            }
            .lg\:text-6xl{
                font-size:3.75rem;
                line-height:1
            }
            .lg\:text-lg{
                font-size:1.125rem;
                line-height:1.75rem
            }
            .lg\:text-xl{
                font-size:1.25rem;
                line-height:1.75rem
            }
        }
        @media (min-width: 1366px){
            .xl\:relative{
                position:relative
            }
            .xl\:top-16{
                top:4rem
            }
            .xl\:mx-16{
                margin-left:4rem;
                margin-right:4rem
            }
            .xl\:my-16{
                margin-top:4rem;
                margin-bottom:4rem
            }
            .xl\:my-32{
                margin-top:8rem;
                margin-bottom:8rem
            }
            .xl\:mb-0{
                margin-bottom:0
            }
            .xl\:mb-8{
                margin-bottom:2rem
            }
            .xl\:h-16{
                height:4rem
            }
            .xl\:h-8{
                height:2rem
            }
            .xl\:max-h-\[94\%\]{
                max-height:94%
            }
            .xl\:w-1\/2{
                width:50%
            }
            .xl\:w-1\/3{
                width:33.333333%
            }
            .xl\:w-16{
                width:4rem
            }
            .xl\:w-8{
                width:2rem
            }
            .xl\:flex-row{
                flex-direction:row
            }
            .xl\:\!rounded-2xl{
                border-radius:1rem!important
            }
            .xl\:p-10{
                padding:2.5rem
            }
            .xl\:p-8{
                padding:2rem
            }
            .xl\:px-32{
                padding-left:8rem;
                padding-right:8rem
            }
            .xl\:px-6{
                padding-left:1.5rem;
                padding-right:1.5rem
            }
            .xl\:px-8{
                padding-left:2rem;
                padding-right:2rem
            }
            .xl\:py-32{
                padding-top:8rem;
                padding-bottom:8rem
            }
            .xl\:pr-0{
                padding-right:0
            }
            .xl\:pt-10{
                padding-top:2.5rem
            }
            .xl\:text-2xl{
                font-size:1.5rem;
                line-height:2rem
            }
            .xl\:text-3xl{
                font-size:1.875rem;
                line-height:2.25rem
            }
            .xl\:text-4xl{
                font-size:2.25rem;
                line-height:2.5rem
            }
            .xl\:text-5xl{
                font-size:3rem;
                line-height:1
            }
            .xl\:text-6xl{
                font-size:3.75rem;
                line-height:1
            }
            .xl\:text-7xl{
                font-size:4.5rem;
                line-height:1
            }
            .xl\:text-lg{
                font-size:1.125rem;
                line-height:1.75rem
            }
            .xl\:text-xl{
                font-size:1.25rem;
                line-height:1.75rem
            }
        }
        .ltr\:left-0:where([dir=ltr],[dir=ltr] *){
            left:0
        }
        .ltr\:right-0:where([dir=ltr],[dir=ltr] *){
            right:0
        }
        .ltr\:mx-1:where([dir=ltr],[dir=ltr] *){
            margin-left:.25rem;
            margin-right:.25rem
        }
        .ltr\:-ml-1:where([dir=ltr],[dir=ltr] *){
            margin-left:-.25rem
        }
        .ltr\:-ml-3:where([dir=ltr],[dir=ltr] *){
            margin-left:-.75rem
        }
        .ltr\:ml-1:where([dir=ltr],[dir=ltr] *){
            margin-left:.25rem
        }
        .ltr\:ml-1\.5:where([dir=ltr],[dir=ltr] *){
            margin-left:.375rem
        }
        .ltr\:ml-2:where([dir=ltr],[dir=ltr] *){
            margin-left:.5rem
        }
        .ltr\:ml-4:where([dir=ltr],[dir=ltr] *){
            margin-left:1rem
        }
        .ltr\:ml-5:where([dir=ltr],[dir=ltr] *){
            margin-left:1.25rem
        }
        .ltr\:mr-1:where([dir=ltr],[dir=ltr] *){
            margin-right:.25rem
        }
        .ltr\:mr-2:where([dir=ltr],[dir=ltr] *){
            margin-right:.5rem
        }
        .ltr\:hidden:where([dir=ltr],[dir=ltr] *){
            display:none
        }
        .ltr\:-translate-x-0:where([dir=ltr],[dir=ltr] *){
            --tw-translate-x: -0px;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .ltr\:-translate-x-full:where([dir=ltr],[dir=ltr] *){
            --tw-translate-x: -100%;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .ltr\:scale-x-\[-1\]:where([dir=ltr],[dir=ltr] *){
            --tw-scale-x: -1;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .ltr\:transform:where([dir=ltr],[dir=ltr] *){
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .ltr\:flex-row-reverse:where([dir=ltr],[dir=ltr] *){
            flex-direction:row-reverse
        }
        .ltr\:bg-gradient-to-r:where([dir=ltr],[dir=ltr] *){
            background-image:linear-gradient(to right,var(--tw-gradient-stops))
        }
        .ltr\:pr-3:where([dir=ltr],[dir=ltr] *){
            padding-right:.75rem
        }
        .ltr\:pr-3\.5:where([dir=ltr],[dir=ltr] *){
            padding-right:.875rem
        }
        .ltr\:pr-8:where([dir=ltr],[dir=ltr] *){
            padding-right:2rem
        }
        @media (min-width: 1366px){
            .ltr\:xl\:text-2xl:where([dir=ltr],[dir=ltr] *){
                font-size:1.5rem;
                line-height:2rem
            }
        }
        .rtl\:left-0:where([dir=rtl],[dir=rtl] *){
            left:0
        }
        .rtl\:right-0:where([dir=rtl],[dir=rtl] *){
            right:0
        }
        .rtl\:-mr-1:where([dir=rtl],[dir=rtl] *){
            margin-right:-.25rem
        }
        .rtl\:-mr-3:where([dir=rtl],[dir=rtl] *){
            margin-right:-.75rem
        }
        .rtl\:ml-1:where([dir=rtl],[dir=rtl] *){
            margin-left:.25rem
        }
        .rtl\:ml-2:where([dir=rtl],[dir=rtl] *){
            margin-left:.5rem
        }
        .rtl\:mr-1:where([dir=rtl],[dir=rtl] *){
            margin-right:.25rem
        }
        .rtl\:mr-1\.5:where([dir=rtl],[dir=rtl] *){
            margin-right:.375rem
        }
        .rtl\:mr-2:where([dir=rtl],[dir=rtl] *){
            margin-right:.5rem
        }
        .rtl\:mr-4:where([dir=rtl],[dir=rtl] *){
            margin-right:1rem
        }
        .rtl\:mr-5:where([dir=rtl],[dir=rtl] *){
            margin-right:1.25rem
        }
        .rtl\:hidden:where([dir=rtl],[dir=rtl] *){
            display:none
        }
        .rtl\:translate-x-0:where([dir=rtl],[dir=rtl] *){
            --tw-translate-x: 0px;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .rtl\:translate-x-full:where([dir=rtl],[dir=rtl] *){
            --tw-translate-x: 100%;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .rtl\:scale-x-\[-1\]:where([dir=rtl],[dir=rtl] *){
            --tw-scale-x: -1;
            transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }
        .rtl\:bg-gradient-to-l:where([dir=rtl],[dir=rtl] *){
            background-image:linear-gradient(to left,var(--tw-gradient-stops))
        }
        .rtl\:pl-3:where([dir=rtl],[dir=rtl] *){
            padding-left:.75rem
        }
        .rtl\:pl-3\.5:where([dir=rtl],[dir=rtl] *){
            padding-left:.875rem
        }
        .rtl\:pl-8:where([dir=rtl],[dir=rtl] *){
            padding-left:2rem
        }
        @media (min-width: 1366px){
            .rtl\:xl\:text-3xl:where([dir=rtl],[dir=rtl] *){
                font-size:1.875rem;
                line-height:2.25rem
            }
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Detect the browser language
            const userLang = navigator.language || navigator.userLanguage;
            
            // Set the language attribute on the <html> element
            document.documentElement.lang = userLang.split('-')[0];

            // Set the direction attribute on the <html> element based on the language
            if (userLang.startsWith('ar')) {
                document.documentElement.dir = 'rtl';
            } else {
                document.documentElement.dir = 'ltr';
            }
        });
    </script>
</head>
<body>
    <!-- Body -->
    <main>
        <div class="grid h-screen px-4 bg-white place-content-center dark:bg-zinc-900">
            <div class="flex flex-col gap-4 text-center">
                <h1 class="text-6xl font-bold text-gray-300 dark:text-gray-600 ltr:hidden">Offline</h1>
                <h1 class="text-6xl font-bold text-gray-300 dark:text-gray-600 rtl:hidden">غير متصل</h1>
            </div>
        </div>
    </main>
    <!-- Body -->
</body>
</html>
