<style>

    /*--------------------------------------------------------------
# Footer
--------------------------------------------------------------*/
    /*!
 * Bootstrap v4.3.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
    :root {
        --blue: #007bff;
        --indigo: #6610f2;
        --purple: #6f42c1;
        --pink: #e83e8c;
        --red: #dc3545;
        --orange: #fd7e14;
        --yellow: #ffc107;
        --green: #28a745;
        --teal: #20c997;
        --cyan: #17a2b8;
        --white: #fff;
        --gray: #6c757d;
        --gray-dark: #343a40;
        --primary: #007bff;
        --secondary: #6c757d;
        --success: #28a745;
        --info: #17a2b8;
        --warning: #ffc107;
        --danger: #dc3545;
        --light: #f8f9fa;
        --dark: #343a40;
        --breakpoint-xs: 0;
        --breakpoint-sm: 576px;
        --breakpoint-md: 768px;
        --breakpoint-lg: 992px;
        --breakpoint-xl: 1200px;
        --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace; }

    *,
    *::before,
    *::after {
        -webkit-box-sizing: border-box;
        box-sizing: border-box; }

    html {
        font-family: sans-serif;
        line-height: 1.15;
        -webkit-text-size-adjust: 100%;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0); }

    article, aside, figcaption, figure, footer, header, hgroup, main, nav, section {
        display: block; }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #212529;
        text-align: left;
        background-color: #fff; }

    [tabindex="-1"]:focus {
        outline: 0 !important; }

    hr {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        height: 0;
        overflow: visible; }

    h1, h2, h3, h4, h5, h6 {
        margin-top: 0;
        margin-bottom: 0.5rem; }

    p {
        margin-top: 0;
        margin-bottom: 1rem; }

    abbr[title],
    abbr[data-original-title] {
        text-decoration: underline;
        -webkit-text-decoration: underline dotted;
        text-decoration: underline dotted;
        cursor: help;
        border-bottom: 0;
        text-decoration-skip-ink: none; }

    address {
        margin-bottom: 1rem;
        font-style: normal;
        line-height: inherit; }

    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 1rem; }

    ol ol,
    ul ul,
    ol ul,
    ul ol {
        margin-bottom: 0; }

    dt {
        font-weight: 700; }

    dd {
        margin-bottom: .5rem;
        margin-left: 0; }

    blockquote {
        margin: 0 0 1rem; }

    b,
    strong {
        font-weight: bolder; }

    small {
        font-size: 80%; }

    sub,
    sup {
        position: relative;
        font-size: 75%;
        line-height: 0;
        vertical-align: baseline; }

    sub {
        bottom: -.25em; }

    sup {
        top: -.5em; }

    a {
        color: #007bff;
        text-decoration: none;
        background-color: transparent; }
    a:hover {
        color: #0056b3;
        text-decoration: underline; }

    a:not([href]):not([tabindex]) {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):hover, a:not([href]):not([tabindex]):focus {
        color: inherit;
        text-decoration: none; }
    a:not([href]):not([tabindex]):focus {
        outline: 0; }

    pre,
    code,
    kbd,
    samp {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 1em; }

    pre {
        margin-top: 0;
        margin-bottom: 1rem;
        overflow: auto; }

    figure {
        margin: 0 0 1rem; }

    img {
        vertical-align: middle;
        border-style: none; }

    svg {
        overflow: hidden;
        vertical-align: middle; }

    table {
        border-collapse: collapse; }

    caption {
        padding-top: 0.75rem;
        padding-bottom: 0.75rem;
        color: #6c757d;
        text-align: left;
        caption-side: bottom; }

    th {
        text-align: inherit; }

    label {
        display: inline-block;
        margin-bottom: 0.5rem; }

    button {
        border-radius: 0; }

    button:focus {
        outline: 1px dotted;
        outline: 5px auto -webkit-focus-ring-color; }

    input,
    button,
    select,
    optgroup,
    textarea {
        margin: 0;
        font-family: inherit;
        font-size: inherit;
        line-height: inherit; }

    button,
    input {
        overflow: visible; }

    button,
    select {
        text-transform: none; }

    select {
        word-wrap: normal; }

    button,
    [type="button"],
    [type="reset"],
    [type="submit"] {
        -webkit-appearance: button; }

    button:not(:disabled),
    [type="button"]:not(:disabled),
    [type="reset"]:not(:disabled),
    [type="submit"]:not(:disabled) {
        cursor: pointer; }

    button::-moz-focus-inner,
    [type="button"]::-moz-focus-inner,
    [type="reset"]::-moz-focus-inner,
    [type="submit"]::-moz-focus-inner {
        padding: 0;
        border-style: none; }

    input[type="radio"],
    input[type="checkbox"] {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 0; }

    input[type="date"],
    input[type="time"],
    input[type="datetime-local"],
    input[type="month"] {
        -webkit-appearance: listbox; }

    textarea {
        overflow: auto;
        resize: vertical; }

    fieldset {
        min-width: 0;
        padding: 0;
        margin: 0;
        border: 0; }

    legend {
        display: block;
        width: 100%;
        max-width: 100%;
        padding: 0;
        margin-bottom: .5rem;
        font-size: 1.5rem;
        line-height: inherit;
        color: inherit;
        white-space: normal; }

    progress {
        vertical-align: baseline; }

    [type="number"]::-webkit-inner-spin-button,
    [type="number"]::-webkit-outer-spin-button {
        height: auto; }

    [type="search"] {
        outline-offset: -2px;
        -webkit-appearance: none; }

    [type="search"]::-webkit-search-decoration {
        -webkit-appearance: none; }

    ::-webkit-file-upload-button {
        font: inherit;
        -webkit-appearance: button; }

    output {
        display: inline-block; }

    summary {
        display: list-item;
        cursor: pointer; }

    template {
        display: none; }

    [hidden] {
        display: none !important; }

    h1, h2, h3, h4, h5, h6,
    .h1, .h2, .h3, .h4, .h5, .h6 {
        margin-bottom: 0.5rem;
        font-weight: 500;
        line-height: 1.2; }

    h1, .h1 {
        font-size: 2.5rem; }

    h2, .h2 {
        font-size: 2rem; }

    h3, .h3 {
        font-size: 1.75rem; }

    h4, .h4 {
        font-size: 1.5rem; }

    h5, .h5 {
        font-size: 1.25rem; }

    h6, .h6 {
        font-size: 1rem; }

    .lead {
        font-size: 1.25rem;
        font-weight: 300; }

    .display-1 {
        font-size: 6rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-2 {
        font-size: 5.5rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-3 {
        font-size: 4.5rem;
        font-weight: 300;
        line-height: 1.2; }

    .display-4 {
        font-size: 3.5rem;
        font-weight: 300;
        line-height: 1.2; }

    hr {
        margin-top: 1rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 0.1); }

    small,
    .small {
        font-size: 80%;
        font-weight: 400; }

    mark,
    .mark {
        padding: 0.2em;
        background-color: #fcf8e3; }

    .list-unstyled {
        padding-left: 0;
        list-style: none; }

    .list-inline {
        padding-left: 0;
        list-style: none; }

    .list-inline-item {
        display: inline-block; }
    .list-inline-item:not(:last-child) {
        margin-right: 0.5rem; }

    .initialism {
        font-size: 90%;
        text-transform: uppercase; }

    .blockquote {
        margin-bottom: 1rem;
        font-size: 1.25rem; }

    .blockquote-footer {
        display: block;
        font-size: 80%;
        color: #6c757d; }
    .blockquote-footer::before {
        content: "\2014\00A0"; }

    .img-fluid {
        max-width: 100%;
        height: auto; }

    .img-thumbnail {
        padding: 0.25rem;
        background-color: #fff;
        border: 1px solid #dee2e6;
        border-radius: 0.25rem;
        max-width: 100%;
        height: auto; }

    .figure {
        display: inline-block; }

    .figure-img {
        margin-bottom: 0.5rem;
        line-height: 1; }

    .figure-caption {
        font-size: 90%;
        color: #6c757d; }

    code {
        font-size: 87.5%;
        color: #e83e8c;
        word-break: break-word; }
    a > code {
        color: inherit; }

    kbd {
        padding: 0.2rem 0.4rem;
        font-size: 87.5%;
        color: #fff;
        background-color: #212529;
        border-radius: 0.2rem; }
    kbd kbd {
        padding: 0;
        font-size: 100%;
        font-weight: 700; }

    pre {
        display: block;
        font-size: 87.5%;
        color: #212529; }
    pre code {
        font-size: inherit;
        color: inherit;
        word-break: normal; }

    .pre-scrollable {
        max-height: 340px;
        overflow-y: scroll; }

    .container {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto; }
    @media (min-width: 576px) {
        .container {
            max-width: 540px; } }
    @media (min-width: 768px) {
        .container {
            max-width: 720px; } }
    @media (min-width: 992px) {
        .container {
            max-width: 960px; } }
    @media (min-width: 1200px) {
        .container {
            max-width: 1140px; } }

    .container-fluid {
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto; }

    .row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px; }

    .no-gutters {
        margin-right: 0;
        margin-left: 0; }
    .no-gutters > .col,
    .no-gutters > [class*="col-"] {
        padding-right: 0;
        padding-left: 0; }

    .col-1, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-10, .col-11, .col-12, .col,
    .col-auto, .col-sm-1, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm,
    .col-sm-auto, .col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12, .col-md,
    .col-md-auto, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg,
    .col-lg-auto, .col-xl-1, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px; }

    .col {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        max-width: 100%; }

    .col-auto {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 auto;
        flex: 0 0 auto;
        width: auto;
        max-width: 100%; }

    .col-1 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 8.33333%;
        flex: 0 0 8.33333%;
        max-width: 8.33333%; }

    .col-2 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 16.66667%;
        flex: 0 0 16.66667%;
        max-width: 16.66667%; }

    .col-3 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 25%;
        flex: 0 0 25%;
        max-width: 25%; }

    .col-4 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 33.33333%;
        flex: 0 0 33.33333%;
        max-width: 33.33333%; }

    .col-5 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 41.66667%;
        flex: 0 0 41.66667%;
        max-width: 41.66667%; }

    .col-6 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 50%;
        flex: 0 0 50%;
        max-width: 50%; }

    .col-7 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 58.33333%;
        flex: 0 0 58.33333%;
        max-width: 58.33333%; }

    .col-8 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 66.66667%;
        flex: 0 0 66.66667%;
        max-width: 66.66667%; }

    .col-9 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 75%;
        flex: 0 0 75%;
        max-width: 75%; }

    .col-10 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 83.33333%;
        flex: 0 0 83.33333%;
        max-width: 83.33333%; }

    .col-11 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 91.66667%;
        flex: 0 0 91.66667%;
        max-width: 91.66667%; }

    .col-12 {
        -webkit-box-flex: 0;
        -ms-flex: 0 0 100%;
        flex: 0 0 100%;
        max-width: 100%; }

    .order-first {
        -webkit-box-ordinal-group: 0;
        -ms-flex-order: -1;
        order: -1; }

    .order-last {
        -webkit-box-ordinal-group: 14;
        -ms-flex-order: 13;
        order: 13; }

    .order-0 {
        -webkit-box-ordinal-group: 1;
        -ms-flex-order: 0;
        order: 0; }

    .order-1 {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1; }

    .order-2 {
        -webkit-box-ordinal-group: 3;
        -ms-flex-order: 2;
        order: 2; }

    .order-3 {
        -webkit-box-ordinal-group: 4;
        -ms-flex-order: 3;
        order: 3; }

    .order-4 {
        -webkit-box-ordinal-group: 5;
        -ms-flex-order: 4;
        order: 4; }

    .order-5 {
        -webkit-box-ordinal-group: 6;
        -ms-flex-order: 5;
        order: 5; }

    .order-6 {
        -webkit-box-ordinal-group: 7;
        -ms-flex-order: 6;
        order: 6; }

    .order-7 {
        -webkit-box-ordinal-group: 8;
        -ms-flex-order: 7;
        order: 7; }

    .order-8 {
        -webkit-box-ordinal-group: 9;
        -ms-flex-order: 8;
        order: 8; }

    .order-9 {
        -webkit-box-ordinal-group: 10;
        -ms-flex-order: 9;
        order: 9; }

    .order-10 {
        -webkit-box-ordinal-group: 11;
        -ms-flex-order: 10;
        order: 10; }

    .order-11 {
        -webkit-box-ordinal-group: 12;
        -ms-flex-order: 11;
        order: 11; }

    .order-12 {
        -webkit-box-ordinal-group: 13;
        -ms-flex-order: 12;
        order: 12; }

    .offset-1 {
        margin-left: 8.33333%; }

    .offset-2 {
        margin-left: 16.66667%; }

    .offset-3 {
        margin-left: 25%; }

    .offset-4 {
        margin-left: 33.33333%; }

    .offset-5 {
        margin-left: 41.66667%; }

    .offset-6 {
        margin-left: 50%; }

    .offset-7 {
        margin-left: 58.33333%; }

    .offset-8 {
        margin-left: 66.66667%; }

    .offset-9 {
        margin-left: 75%; }

    .offset-10 {
        margin-left: 83.33333%; }

    .offset-11 {
        margin-left: 91.66667%; }

    @media (min-width: 576px) {
        .col-sm {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-sm-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-sm-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-sm-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-sm-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-sm-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-sm-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-sm-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-sm-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-sm-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-sm-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-sm-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-sm-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-sm-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-sm-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-sm-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-sm-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-sm-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-sm-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-sm-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-sm-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-sm-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-sm-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-sm-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-sm-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-sm-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-sm-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-sm-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-sm-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-sm-0 {
            margin-left: 0; }
        .offset-sm-1 {
            margin-left: 8.33333%; }
        .offset-sm-2 {
            margin-left: 16.66667%; }
        .offset-sm-3 {
            margin-left: 25%; }
        .offset-sm-4 {
            margin-left: 33.33333%; }
        .offset-sm-5 {
            margin-left: 41.66667%; }
        .offset-sm-6 {
            margin-left: 50%; }
        .offset-sm-7 {
            margin-left: 58.33333%; }
        .offset-sm-8 {
            margin-left: 66.66667%; }
        .offset-sm-9 {
            margin-left: 75%; }
        .offset-sm-10 {
            margin-left: 83.33333%; }
        .offset-sm-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 768px) {
        .col-md {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-md-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-md-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-md-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-md-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-md-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-md-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-md-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-md-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-md-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-md-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-md-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-md-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-md-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-md-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-md-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-md-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-md-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-md-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-md-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-md-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-md-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-md-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-md-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-md-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-md-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-md-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-md-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-md-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-md-0 {
            margin-left: 0; }
        .offset-md-1 {
            margin-left: 8.33333%; }
        .offset-md-2 {
            margin-left: 16.66667%; }
        .offset-md-3 {
            margin-left: 25%; }
        .offset-md-4 {
            margin-left: 33.33333%; }
        .offset-md-5 {
            margin-left: 41.66667%; }
        .offset-md-6 {
            margin-left: 50%; }
        .offset-md-7 {
            margin-left: 58.33333%; }
        .offset-md-8 {
            margin-left: 66.66667%; }
        .offset-md-9 {
            margin-left: 75%; }
        .offset-md-10 {
            margin-left: 83.33333%; }
        .offset-md-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 992px) {
        .col-lg {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-lg-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-lg-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-lg-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-lg-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-lg-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-lg-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-lg-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-lg-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-lg-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-lg-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-lg-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-lg-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-lg-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-lg-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-lg-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-lg-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-lg-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-lg-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-lg-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-lg-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-lg-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-lg-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-lg-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-lg-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-lg-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-lg-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-lg-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-lg-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-lg-0 {
            margin-left: 0; }
        .offset-lg-1 {
            margin-left: 8.33333%; }
        .offset-lg-2 {
            margin-left: 16.66667%; }
        .offset-lg-3 {
            margin-left: 25%; }
        .offset-lg-4 {
            margin-left: 33.33333%; }
        .offset-lg-5 {
            margin-left: 41.66667%; }
        .offset-lg-6 {
            margin-left: 50%; }
        .offset-lg-7 {
            margin-left: 58.33333%; }
        .offset-lg-8 {
            margin-left: 66.66667%; }
        .offset-lg-9 {
            margin-left: 75%; }
        .offset-lg-10 {
            margin-left: 83.33333%; }
        .offset-lg-11 {
            margin-left: 91.66667%; } }

    @media (min-width: 1200px) {
        .col-xl {
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            max-width: 100%; }
        .col-xl-auto {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            width: auto;
            max-width: 100%; }
        .col-xl-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.33333%;
            flex: 0 0 8.33333%;
            max-width: 8.33333%; }
        .col-xl-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.66667%;
            flex: 0 0 16.66667%;
            max-width: 16.66667%; }
        .col-xl-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%; }
        .col-xl-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.33333%;
            flex: 0 0 33.33333%;
            max-width: 33.33333%; }
        .col-xl-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.66667%;
            flex: 0 0 41.66667%;
            max-width: 41.66667%; }
        .col-xl-6 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%; }
        .col-xl-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.33333%;
            flex: 0 0 58.33333%;
            max-width: 58.33333%; }
        .col-xl-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.66667%;
            flex: 0 0 66.66667%;
            max-width: 66.66667%; }
        .col-xl-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%; }
        .col-xl-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.33333%;
            flex: 0 0 83.33333%;
            max-width: 83.33333%; }
        .col-xl-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.66667%;
            flex: 0 0 91.66667%;
            max-width: 91.66667%; }
        .col-xl-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%; }
        .order-xl-first {
            -webkit-box-ordinal-group: 0;
            -ms-flex-order: -1;
            order: -1; }
        .order-xl-last {
            -webkit-box-ordinal-group: 14;
            -ms-flex-order: 13;
            order: 13; }
        .order-xl-0 {
            -webkit-box-ordinal-group: 1;
            -ms-flex-order: 0;
            order: 0; }
        .order-xl-1 {
            -webkit-box-ordinal-group: 2;
            -ms-flex-order: 1;
            order: 1; }
        .order-xl-2 {
            -webkit-box-ordinal-group: 3;
            -ms-flex-order: 2;
            order: 2; }
        .order-xl-3 {
            -webkit-box-ordinal-group: 4;
            -ms-flex-order: 3;
            order: 3; }
        .order-xl-4 {
            -webkit-box-ordinal-group: 5;
            -ms-flex-order: 4;
            order: 4; }
        .order-xl-5 {
            -webkit-box-ordinal-group: 6;
            -ms-flex-order: 5;
            order: 5; }
        .order-xl-6 {
            -webkit-box-ordinal-group: 7;
            -ms-flex-order: 6;
            order: 6; }
        .order-xl-7 {
            -webkit-box-ordinal-group: 8;
            -ms-flex-order: 7;
            order: 7; }
        .order-xl-8 {
            -webkit-box-ordinal-group: 9;
            -ms-flex-order: 8;
            order: 8; }
        .order-xl-9 {
            -webkit-box-ordinal-group: 10;
            -ms-flex-order: 9;
            order: 9; }
        .order-xl-10 {
            -webkit-box-ordinal-group: 11;
            -ms-flex-order: 10;
            order: 10; }
        .order-xl-11 {
            -webkit-box-ordinal-group: 12;
            -ms-flex-order: 11;
            order: 11; }
        .order-xl-12 {
            -webkit-box-ordinal-group: 13;
            -ms-flex-order: 12;
            order: 12; }
        .offset-xl-0 {
            margin-left: 0; }
        .offset-xl-1 {
            margin-left: 8.33333%; }
        .offset-xl-2 {
            margin-left: 16.66667%; }
        .offset-xl-3 {
            margin-left: 25%; }
        .offset-xl-4 {
            margin-left: 33.33333%; }
        .offset-xl-5 {
            margin-left: 41.66667%; }
        .offset-xl-6 {
            margin-left: 50%; }
        .offset-xl-7 {
            margin-left: 58.33333%; }
        .offset-xl-8 {
            margin-left: 66.66667%; }
        .offset-xl-9 {
            margin-left: 75%; }
        .offset-xl-10 {
            margin-left: 83.33333%; }
        .offset-xl-11 {
            margin-left: 91.66667%; } }

    .table {
        width: 100%;
        margin-bottom: 1rem;
        color: #212529; }
    .table th,
    .table td {
        padding: 0.75rem;
        vertical-align: top;
        border-top: 1px solid #dee2e6; }
    .table thead th {
        vertical-align: bottom;
        border-bottom: 2px solid #dee2e6; }
    .table tbody + tbody {
        border-top: 2px solid #dee2e6; }

    .table-sm th,
    .table-sm td {
        padding: 0.3rem; }

    .table-bordered {
        border: 1px solid #dee2e6; }
    .table-bordered th,
    .table-bordered td {
        border: 1px solid #dee2e6; }
    .table-bordered thead th,
    .table-bordered thead td {
        border-bottom-width: 2px; }

    .table-borderless th,
    .table-borderless td,
    .table-borderless thead th,
    .table-borderless tbody + tbody {
        border: 0; }

    .table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(0, 0, 0, 0.05); }

    .table-hover tbody tr:hover {
        color: #212529;
        background-color: rgba(0, 0, 0, 0.075); }

    .table-primary,
    .table-primary > th,
    .table-primary > td {
        background-color: #b8daff; }

    .table-primary th,
    .table-primary td,
    .table-primary thead th,
    .table-primary tbody + tbody {
        border-color: #7abaff; }

    .table-hover .table-primary:hover {
        background-color: #9fcdff; }
    .table-hover .table-primary:hover > td,
    .table-hover .table-primary:hover > th {
        background-color: #9fcdff; }

    .table-secondary,
    .table-secondary > th,
    .table-secondary > td {
        background-color: #d6d8db; }

    .table-secondary th,
    .table-secondary td,
    .table-secondary thead th,
    .table-secondary tbody + tbody {
        border-color: #b3b7bb; }

    .table-hover .table-secondary:hover {
        background-color: #c8cbcf; }
    .table-hover .table-secondary:hover > td,
    .table-hover .table-secondary:hover > th {
        background-color: #c8cbcf; }

    .table-success,
    .table-success > th,
    .table-success > td {
        background-color: #c3e6cb; }

    .table-success th,
    .table-success td,
    .table-success thead th,
    .table-success tbody + tbody {
        border-color: #8fd19e; }

    .table-hover .table-success:hover {
        background-color: #b1dfbb; }
    .table-hover .table-success:hover > td,
    .table-hover .table-success:hover > th {
        background-color: #b1dfbb; }

    .table-info,
    .table-info > th,
    .table-info > td {
        background-color: #bee5eb; }

    .table-info th,
    .table-info td,
    .table-info thead th,
    .table-info tbody + tbody {
        border-color: #86cfda; }

    .table-hover .table-info:hover {
        background-color: #abdde5; }
    .table-hover .table-info:hover > td,
    .table-hover .table-info:hover > th {
        background-color: #abdde5; }

    .table-warning,
    .table-warning > th,
    .table-warning > td {
        background-color: #ffeeba; }

    .table-warning th,
    .table-warning td,
    .table-warning thead th,
    .table-warning tbody + tbody {
        border-color: #ffdf7e; }

    .table-hover .table-warning:hover {
        background-color: #ffe8a1; }
    .table-hover .table-warning:hover > td,
    .table-hover .table-warning:hover > th {
        background-color: #ffe8a1; }

    .table-danger,
    .table-danger > th,
    .table-danger > td {
        background-color: #f5c6cb; }

    .table-danger th,
    .table-danger td,
    .table-danger thead th,
    .table-danger tbody + tbody {
        border-color: #ed969e; }

    .table-hover .table-danger:hover {
        background-color: #f1b0b7; }
    .table-hover .table-danger:hover > td,
    .table-hover .table-danger:hover > th {
        background-color: #f1b0b7; }

    .table-light,
    .table-light > th,
    .table-light > td {
        background-color: #fdfdfe; }

    .table-light th,
    .table-light td,
    .table-light thead th,
    .table-light tbody + tbody {
        border-color: #fbfcfc; }

    .table-hover .table-light:hover {
        background-color: #ececf6; }
    .table-hover .table-light:hover > td,
    .table-hover .table-light:hover > th {
        background-color: #ececf6; }

    .table-dark,
    .table-dark > th,
    .table-dark > td {
        background-color: #c6c8ca; }

    .table-dark th,
    .table-dark td,
    .table-dark thead th,
    .table-dark tbody + tbody {
        border-color: #95999c; }

    .table-hover .table-dark:hover {
        background-color: #b9bbbe; }
    .table-hover .table-dark:hover > td,
    .table-hover .table-dark:hover > th {
        background-color: #b9bbbe; }

    .table-active,
    .table-active > th,
    .table-active > td {
        background-color: rgba(0, 0, 0, 0.075); }

    .table-hover .table-active:hover {
        background-color: rgba(0, 0, 0, 0.075); }
    .table-hover .table-active:hover > td,
    .table-hover .table-active:hover > th {
        background-color: rgba(0, 0, 0, 0.075); }

    .table .thead-dark th {
        color: #fff;
        background-color: #343a40;
        border-color: #454d55; }

    .table .thead-light th {
        color: #495057;
        background-color: #e9ecef;
        border-color: #dee2e6; }

    .table-dark {
        color: #fff;
        background-color: #343a40; }
    .table-dark th,
    .table-dark td,
    .table-dark thead th {
        border-color: #454d55; }
    .table-dark.table-bordered {
        border: 0; }
    .table-dark.table-striped tbody tr:nth-of-type(odd) {
        background-color: rgba(255, 255, 255, 0.05); }
    .table-dark.table-hover tbody tr:hover {
        color: #fff;
        background-color: rgba(255, 255, 255, 0.075); }

    @media (max-width: 575.98px) {
        .table-responsive-sm {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; }
        .table-responsive-sm > .table-bordered {
            border: 0; } }

    @media (max-width: 767.98px) {
        .table-responsive-md {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; }
        .table-responsive-md > .table-bordered {
            border: 0; } }

    @media (max-width: 991.98px) {
        .table-responsive-lg {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; }
        .table-responsive-lg > .table-bordered {
            border: 0; } }

    @media (max-width: 1199.98px) {
        .table-responsive-xl {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch; }
        .table-responsive-xl > .table-bordered {
            border: 0; } }

    .table-responsive {
        display: block;
        width: 100%;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch; }
    .table-responsive > .table-bordered {
        border: 0; }

    .form-control {
        display: block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .form-control {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .form-control::-ms-expand {
        background-color: transparent;
        border: 0; }
    .form-control:focus {
        color: #495057;
        background-color: #fff;
        border-color: #80bdff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .form-control::-webkit-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control:-ms-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control::-ms-input-placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control::placeholder {
        color: #6c757d;
        opacity: 1; }
    .form-control:disabled, .form-control[readonly] {
        background-color: #e9ecef;
        opacity: 1; }

    select.form-control:focus::-ms-value {
        color: #495057;
        background-color: #fff; }

    .form-control-file,
    .form-control-range {
        display: block;
        width: 100%; }

    .col-form-label {
        padding-top: calc(0.375rem + 1px);
        padding-bottom: calc(0.375rem + 1px);
        margin-bottom: 0;
        font-size: inherit;
        line-height: 1.5; }

    .col-form-label-lg {
        padding-top: calc(0.5rem + 1px);
        padding-bottom: calc(0.5rem + 1px);
        font-size: 1.25rem;
        line-height: 1.5; }

    .col-form-label-sm {
        padding-top: calc(0.25rem + 1px);
        padding-bottom: calc(0.25rem + 1px);
        font-size: 0.875rem;
        line-height: 1.5; }

    .form-control-plaintext {
        display: block;
        width: 100%;
        padding-top: 0.375rem;
        padding-bottom: 0.375rem;
        margin-bottom: 0;
        line-height: 1.5;
        color: #212529;
        background-color: transparent;
        border: solid transparent;
        border-width: 1px 0; }
    .form-control-plaintext.form-control-sm, .form-control-plaintext.form-control-lg {
        padding-right: 0;
        padding-left: 0; }

    .form-control-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem; }

    .form-control-lg {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem; }

    select.form-control[size], select.form-control[multiple] {
        height: auto; }

    textarea.form-control {
        height: auto; }

    .form-group {
        margin-bottom: 1rem; }

    .form-text {
        display: block;
        margin-top: 0.25rem; }

    .form-row {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        margin-right: -5px;
        margin-left: -5px; }
    .form-row > .col,
    .form-row > [class*="col-"] {
        padding-right: 5px;
        padding-left: 5px; }

    .form-check {
        position: relative;
        display: block;
        padding-left: 1.25rem; }

    .form-check-input {
        position: absolute;
        margin-top: 0.3rem;
        margin-left: -1.25rem; }
    .form-check-input:disabled ~ .form-check-label {
        color: #6c757d; }

    .form-check-label {
        margin-bottom: 0; }

    .form-check-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding-left: 0;
        margin-right: 0.75rem; }
    .form-check-inline .form-check-input {
        position: static;
        margin-top: 0;
        margin-right: 0.3125rem;
        margin-left: 0; }

    .valid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #28a745; }

    .valid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(40, 167, 69, 0.9);
        border-radius: 0.25rem; }

    .was-validated .form-control:valid, .form-control.is-valid {
        border-color: #28a745;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
    .was-validated .form-control:valid:focus, .form-control.is-valid:focus {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
    .was-validated .form-control:valid ~ .valid-feedback,
    .was-validated .form-control:valid ~ .valid-tooltip, .form-control.is-valid ~ .valid-feedback,
    .form-control.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated textarea.form-control:valid, textarea.form-control.is-valid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

    .was-validated .custom-select:valid, .custom-select.is-valid {
        border-color: #28a745;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%2328a745' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
    .was-validated .custom-select:valid:focus, .custom-select.is-valid:focus {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }
    .was-validated .custom-select:valid ~ .valid-feedback,
    .was-validated .custom-select:valid ~ .valid-tooltip, .custom-select.is-valid ~ .valid-feedback,
    .custom-select.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .form-control-file:valid ~ .valid-feedback,
    .was-validated .form-control-file:valid ~ .valid-tooltip, .form-control-file.is-valid ~ .valid-feedback,
    .form-control-file.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .form-check-input:valid ~ .form-check-label, .form-check-input.is-valid ~ .form-check-label {
        color: #28a745; }

    .was-validated .form-check-input:valid ~ .valid-feedback,
    .was-validated .form-check-input:valid ~ .valid-tooltip, .form-check-input.is-valid ~ .valid-feedback,
    .form-check-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-control-input:valid ~ .custom-control-label, .custom-control-input.is-valid ~ .custom-control-label {
        color: #28a745; }
    .was-validated .custom-control-input:valid ~ .custom-control-label::before, .custom-control-input.is-valid ~ .custom-control-label::before {
        border-color: #28a745; }

    .was-validated .custom-control-input:valid ~ .valid-feedback,
    .was-validated .custom-control-input:valid ~ .valid-tooltip, .custom-control-input.is-valid ~ .valid-feedback,
    .custom-control-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-control-input:valid:checked ~ .custom-control-label::before, .custom-control-input.is-valid:checked ~ .custom-control-label::before {
        border-color: #34ce57;
        background-color: #34ce57; }

    .was-validated .custom-control-input:valid:focus ~ .custom-control-label::before, .custom-control-input.is-valid:focus ~ .custom-control-label::before {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

    .was-validated .custom-control-input:valid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-valid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #28a745; }

    .was-validated .custom-file-input:valid ~ .custom-file-label, .custom-file-input.is-valid ~ .custom-file-label {
        border-color: #28a745; }

    .was-validated .custom-file-input:valid ~ .valid-feedback,
    .was-validated .custom-file-input:valid ~ .valid-tooltip, .custom-file-input.is-valid ~ .valid-feedback,
    .custom-file-input.is-valid ~ .valid-tooltip {
        display: block; }

    .was-validated .custom-file-input:valid:focus ~ .custom-file-label, .custom-file-input.is-valid:focus ~ .custom-file-label {
        border-color: #28a745;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.25); }

    .invalid-feedback {
        display: none;
        width: 100%;
        margin-top: 0.25rem;
        font-size: 80%;
        color: #dc3545; }

    .invalid-tooltip {
        position: absolute;
        top: 100%;
        z-index: 5;
        display: none;
        max-width: 100%;
        padding: 0.25rem 0.5rem;
        margin-top: .1rem;
        font-size: 0.875rem;
        line-height: 1.5;
        color: #fff;
        background-color: rgba(220, 53, 69, 0.9);
        border-radius: 0.25rem; }

    .was-validated .form-control:invalid, .form-control.is-invalid {
        border-color: #dc3545;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E");
        background-repeat: no-repeat;
        background-position: center right calc(0.375em + 0.1875rem);
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
    .was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
    .was-validated .form-control:invalid ~ .invalid-feedback,
    .was-validated .form-control:invalid ~ .invalid-tooltip, .form-control.is-invalid ~ .invalid-feedback,
    .form-control.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
        padding-right: calc(1.5em + 0.75rem);
        background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem); }

    .was-validated .custom-select:invalid, .custom-select.is-invalid {
        border-color: #dc3545;
        padding-right: calc((1em + 0.75rem) * 3 / 4 + 1.75rem);
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23dc3545' viewBox='-2 -2 7 7'%3e%3cpath stroke='%23dc3545' d='M0 0l3 3m0-3L0 3'/%3e%3ccircle r='.5'/%3e%3ccircle cx='3' r='.5'/%3e%3ccircle cy='3' r='.5'/%3e%3ccircle cx='3' cy='3' r='.5'/%3e%3c/svg%3E") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem); }
    .was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }
    .was-validated .custom-select:invalid ~ .invalid-feedback,
    .was-validated .custom-select:invalid ~ .invalid-tooltip, .custom-select.is-invalid ~ .invalid-feedback,
    .custom-select.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .form-control-file:invalid ~ .invalid-feedback,
    .was-validated .form-control-file:invalid ~ .invalid-tooltip, .form-control-file.is-invalid ~ .invalid-feedback,
    .form-control-file.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
        color: #dc3545; }

    .was-validated .form-check-input:invalid ~ .invalid-feedback,
    .was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
    .form-check-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
        color: #dc3545; }
    .was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
        border-color: #dc3545; }

    .was-validated .custom-control-input:invalid ~ .invalid-feedback,
    .was-validated .custom-control-input:invalid ~ .invalid-tooltip, .custom-control-input.is-invalid ~ .invalid-feedback,
    .custom-control-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
        border-color: #e4606d;
        background-color: #e4606d; }

    .was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

    .was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #dc3545; }

    .was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
        border-color: #dc3545; }

    .was-validated .custom-file-input:invalid ~ .invalid-feedback,
    .was-validated .custom-file-input:invalid ~ .invalid-tooltip, .custom-file-input.is-invalid ~ .invalid-feedback,
    .custom-file-input.is-invalid ~ .invalid-tooltip {
        display: block; }

    .was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
        border-color: #dc3545;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25); }

    .form-inline {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row wrap;
        flex-flow: row wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
    .form-inline .form-check {
        width: 100%; }
    @media (min-width: 576px) {
        .form-inline label {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-bottom: 0; }
        .form-inline .form-group {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 auto;
            flex: 0 0 auto;
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 0; }
        .form-inline .form-control {
            display: inline-block;
            width: auto;
            vertical-align: middle; }
        .form-inline .form-control-plaintext {
            display: inline-block; }
        .form-inline .input-group,
        .form-inline .custom-select {
            width: auto; }
        .form-inline .form-check {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            width: auto;
            padding-left: 0; }
        .form-inline .form-check-input {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0;
            margin-top: 0;
            margin-right: 0.25rem;
            margin-left: 0; }
        .form-inline .custom-control {
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center; }
        .form-inline .custom-control-label {
            margin-bottom: 0; } }

    .btn {
        display: inline-block;
        font-weight: 400;
        color: #212529;
        text-align: center;
        vertical-align: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-color: transparent;
        border: 1px solid transparent;
        padding: 0.375rem 0.75rem;
        font-size: 1rem;
        line-height: 1.5;
        border-radius: 0.25rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .btn {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .btn:hover {
        color: #212529;
        text-decoration: none; }
    .btn:focus, .btn.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .btn.disabled, .btn:disabled {
        opacity: 0.65; }

    a.btn.disabled,
    fieldset:disabled a.btn {
        pointer-events: none; }

    .btn-primary {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }
    .btn-primary:hover {
        color: #fff;
        background-color: #0069d9;
        border-color: #0062cc; }
    .btn-primary:focus, .btn-primary.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5); }
    .btn-primary.disabled, .btn-primary:disabled {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }
    .btn-primary:not(:disabled):not(.disabled):active, .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #0062cc;
        border-color: #005cbf; }
    .btn-primary:not(:disabled):not(.disabled):active:focus, .btn-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(38, 143, 255, 0.5); }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-secondary:hover {
        color: #fff;
        background-color: #5a6268;
        border-color: #545b62; }
    .btn-secondary:focus, .btn-secondary.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5); }
    .btn-secondary.disabled, .btn-secondary:disabled {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-secondary:not(:disabled):not(.disabled):active, .btn-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-secondary.dropdown-toggle {
        color: #fff;
        background-color: #545b62;
        border-color: #4e555b; }
    .btn-secondary:not(:disabled):not(.disabled):active:focus, .btn-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-secondary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(130, 138, 145, 0.5); }

    .btn-success {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745; }
    .btn-success:hover {
        color: #fff;
        background-color: #218838;
        border-color: #1e7e34; }
    .btn-success:focus, .btn-success.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }
    .btn-success.disabled, .btn-success:disabled {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745; }
    .btn-success:not(:disabled):not(.disabled):active, .btn-success:not(:disabled):not(.disabled).active,
    .show > .btn-success.dropdown-toggle {
        color: #fff;
        background-color: #1e7e34;
        border-color: #1c7430; }
    .btn-success:not(:disabled):not(.disabled):active:focus, .btn-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-success.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(72, 180, 97, 0.5); }

    .btn-info {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8; }
    .btn-info:hover {
        color: #fff;
        background-color: #138496;
        border-color: #117a8b; }
    .btn-info:focus, .btn-info.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }
    .btn-info.disabled, .btn-info:disabled {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8; }
    .btn-info:not(:disabled):not(.disabled):active, .btn-info:not(:disabled):not(.disabled).active,
    .show > .btn-info.dropdown-toggle {
        color: #fff;
        background-color: #117a8b;
        border-color: #10707f; }
    .btn-info:not(:disabled):not(.disabled):active:focus, .btn-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(58, 176, 195, 0.5); }

    .btn-warning {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107; }
    .btn-warning:hover {
        color: #212529;
        background-color: #e0a800;
        border-color: #d39e00; }
    .btn-warning:focus, .btn-warning.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }
    .btn-warning.disabled, .btn-warning:disabled {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107; }
    .btn-warning:not(:disabled):not(.disabled):active, .btn-warning:not(:disabled):not(.disabled).active,
    .show > .btn-warning.dropdown-toggle {
        color: #212529;
        background-color: #d39e00;
        border-color: #c69500; }
    .btn-warning:not(:disabled):not(.disabled):active:focus, .btn-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-warning.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(222, 170, 12, 0.5); }

    .btn-danger {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545; }
    .btn-danger:hover {
        color: #fff;
        background-color: #c82333;
        border-color: #bd2130; }
    .btn-danger:focus, .btn-danger.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }
    .btn-danger.disabled, .btn-danger:disabled {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545; }
    .btn-danger:not(:disabled):not(.disabled):active, .btn-danger:not(:disabled):not(.disabled).active,
    .show > .btn-danger.dropdown-toggle {
        color: #fff;
        background-color: #bd2130;
        border-color: #b21f2d; }
    .btn-danger:not(:disabled):not(.disabled):active:focus, .btn-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-danger.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(225, 83, 97, 0.5); }

    .btn-light {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-light:hover {
        color: #212529;
        background-color: #e2e6ea;
        border-color: #dae0e5; }
    .btn-light:focus, .btn-light.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }
    .btn-light.disabled, .btn-light:disabled {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-light:not(:disabled):not(.disabled):active, .btn-light:not(:disabled):not(.disabled).active,
    .show > .btn-light.dropdown-toggle {
        color: #212529;
        background-color: #dae0e5;
        border-color: #d3d9df; }
    .btn-light:not(:disabled):not(.disabled):active:focus, .btn-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(216, 217, 219, 0.5); }

    .btn-dark {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-dark:hover {
        color: #fff;
        background-color: #23272b;
        border-color: #1d2124; }
    .btn-dark:focus, .btn-dark.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }
    .btn-dark.disabled, .btn-dark:disabled {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-dark:not(:disabled):not(.disabled):active, .btn-dark:not(:disabled):not(.disabled).active,
    .show > .btn-dark.dropdown-toggle {
        color: #fff;
        background-color: #1d2124;
        border-color: #171a1d; }
    .btn-dark:not(:disabled):not(.disabled):active:focus, .btn-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-dark.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(82, 88, 93, 0.5); }

    .btn-outline-primary {
        color: #007bff;
        border-color: #007bff; }
    .btn-outline-primary:hover {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }
    .btn-outline-primary:focus, .btn-outline-primary.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }
    .btn-outline-primary.disabled, .btn-outline-primary:disabled {
        color: #007bff;
        background-color: transparent; }
    .btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-primary.dropdown-toggle {
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }
    .btn-outline-primary:not(:disabled):not(.disabled):active:focus, .btn-outline-primary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-primary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

    .btn-outline-secondary {
        color: #6c757d;
        border-color: #6c757d; }
    .btn-outline-secondary:hover {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-outline-secondary:focus, .btn-outline-secondary.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }
    .btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
        color: #6c757d;
        background-color: transparent; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active, .btn-outline-secondary:not(:disabled):not(.disabled).active,
    .show > .btn-outline-secondary.dropdown-toggle {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d; }
    .btn-outline-secondary:not(:disabled):not(.disabled):active:focus, .btn-outline-secondary:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-secondary.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

    .btn-outline-success {
        color: #28a745;
        border-color: #28a745; }
    .btn-outline-success:hover {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745; }
    .btn-outline-success:focus, .btn-outline-success.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }
    .btn-outline-success.disabled, .btn-outline-success:disabled {
        color: #28a745;
        background-color: transparent; }
    .btn-outline-success:not(:disabled):not(.disabled):active, .btn-outline-success:not(:disabled):not(.disabled).active,
    .show > .btn-outline-success.dropdown-toggle {
        color: #fff;
        background-color: #28a745;
        border-color: #28a745; }
    .btn-outline-success:not(:disabled):not(.disabled):active:focus, .btn-outline-success:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-success.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

    .btn-outline-info {
        color: #17a2b8;
        border-color: #17a2b8; }
    .btn-outline-info:hover {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8; }
    .btn-outline-info:focus, .btn-outline-info.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }
    .btn-outline-info.disabled, .btn-outline-info:disabled {
        color: #17a2b8;
        background-color: transparent; }
    .btn-outline-info:not(:disabled):not(.disabled):active, .btn-outline-info:not(:disabled):not(.disabled).active,
    .show > .btn-outline-info.dropdown-toggle {
        color: #fff;
        background-color: #17a2b8;
        border-color: #17a2b8; }
    .btn-outline-info:not(:disabled):not(.disabled):active:focus, .btn-outline-info:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-info.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

    .btn-outline-warning {
        color: #ffc107;
        border-color: #ffc107; }
    .btn-outline-warning:hover {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107; }
    .btn-outline-warning:focus, .btn-outline-warning.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }
    .btn-outline-warning.disabled, .btn-outline-warning:disabled {
        color: #ffc107;
        background-color: transparent; }
    .btn-outline-warning:not(:disabled):not(.disabled):active, .btn-outline-warning:not(:disabled):not(.disabled).active,
    .show > .btn-outline-warning.dropdown-toggle {
        color: #212529;
        background-color: #ffc107;
        border-color: #ffc107; }
    .btn-outline-warning:not(:disabled):not(.disabled):active:focus, .btn-outline-warning:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-warning.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

    .btn-outline-danger {
        color: #dc3545;
        border-color: #dc3545; }
    .btn-outline-danger:hover {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545; }
    .btn-outline-danger:focus, .btn-outline-danger.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }
    .btn-outline-danger.disabled, .btn-outline-danger:disabled {
        color: #dc3545;
        background-color: transparent; }
    .btn-outline-danger:not(:disabled):not(.disabled):active, .btn-outline-danger:not(:disabled):not(.disabled).active,
    .show > .btn-outline-danger.dropdown-toggle {
        color: #fff;
        background-color: #dc3545;
        border-color: #dc3545; }
    .btn-outline-danger:not(:disabled):not(.disabled):active:focus, .btn-outline-danger:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-danger.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

    .btn-outline-light {
        color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-outline-light:hover {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-outline-light:focus, .btn-outline-light.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }
    .btn-outline-light.disabled, .btn-outline-light:disabled {
        color: #f8f9fa;
        background-color: transparent; }
    .btn-outline-light:not(:disabled):not(.disabled):active, .btn-outline-light:not(:disabled):not(.disabled).active,
    .show > .btn-outline-light.dropdown-toggle {
        color: #212529;
        background-color: #f8f9fa;
        border-color: #f8f9fa; }
    .btn-outline-light:not(:disabled):not(.disabled):active:focus, .btn-outline-light:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-light.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

    .btn-outline-dark {
        color: #343a40;
        border-color: #343a40; }
    .btn-outline-dark:hover {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-outline-dark:focus, .btn-outline-dark.focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }
    .btn-outline-dark.disabled, .btn-outline-dark:disabled {
        color: #343a40;
        background-color: transparent; }
    .btn-outline-dark:not(:disabled):not(.disabled):active, .btn-outline-dark:not(:disabled):not(.disabled).active,
    .show > .btn-outline-dark.dropdown-toggle {
        color: #fff;
        background-color: #343a40;
        border-color: #343a40; }
    .btn-outline-dark:not(:disabled):not(.disabled):active:focus, .btn-outline-dark:not(:disabled):not(.disabled).active:focus,
    .show > .btn-outline-dark.dropdown-toggle:focus {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

    .btn-link {
        font-weight: 400;
        color: #007bff;
        text-decoration: none; }
    .btn-link:hover {
        color: #0056b3;
        text-decoration: underline; }
    .btn-link:focus, .btn-link.focus {
        text-decoration: underline;
        -webkit-box-shadow: none;
        box-shadow: none; }
    .btn-link:disabled, .btn-link.disabled {
        color: #6c757d;
        pointer-events: none; }

    .btn-lg, .btn-group-lg > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem; }

    .btn-sm, .btn-group-sm > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem; }

    .btn-block {
        display: block;
        width: 100%; }
    .btn-block + .btn-block {
        margin-top: 0.5rem; }

    input[type="submit"].btn-block,
    input[type="reset"].btn-block,
    input[type="button"].btn-block {
        width: 100%; }

    .fade {
        -webkit-transition: opacity 0.15s linear;
        -o-transition: opacity 0.15s linear;
        transition: opacity 0.15s linear; }
    @media (prefers-reduced-motion: reduce) {
        .fade {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .fade:not(.show) {
        opacity: 0; }

    .collapse:not(.show) {
        display: none; }

    .collapsing {
        position: relative;
        height: 0;
        overflow: hidden;
        -webkit-transition: height 0.35s ease;
        -o-transition: height 0.35s ease;
        transition: height 0.35s ease; }
    @media (prefers-reduced-motion: reduce) {
        .collapsing {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }

    .dropup,
    .dropright,
    .dropdown,
    .dropleft {
        position: relative; }

    .dropdown-toggle {
        white-space: nowrap; }
    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent; }
    .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 1rem;
        color: #212529;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.15);
        border-radius: 0.25rem; }

    .dropdown-menu-left {
        right: auto;
        left: 0; }

    .dropdown-menu-right {
        right: 0;
        left: auto; }

    @media (min-width: 576px) {
        .dropdown-menu-sm-left {
            right: auto;
            left: 0; }
        .dropdown-menu-sm-right {
            right: 0;
            left: auto; } }

    @media (min-width: 768px) {
        .dropdown-menu-md-left {
            right: auto;
            left: 0; }
        .dropdown-menu-md-right {
            right: 0;
            left: auto; } }

    @media (min-width: 992px) {
        .dropdown-menu-lg-left {
            right: auto;
            left: 0; }
        .dropdown-menu-lg-right {
            right: 0;
            left: auto; } }

    @media (min-width: 1200px) {
        .dropdown-menu-xl-left {
            right: auto;
            left: 0; }
        .dropdown-menu-xl-right {
            right: 0;
            left: auto; } }

    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.125rem; }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent; }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 0.125rem; }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid; }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropright .dropdown-toggle::after {
        vertical-align: 0; }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 0.125rem; }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: ""; }

    .dropleft .dropdown-toggle::after {
        display: none; }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent; }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0; }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0; }

    .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
        right: auto;
        bottom: auto; }

    .dropdown-divider {
        height: 0;
        margin: 0.5rem 0;
        overflow: hidden;
        border-top: 1px solid #e9ecef; }

    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #212529;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0; }
    .dropdown-item:hover, .dropdown-item:focus {
        color: #16181b;
        text-decoration: none;
        background-color: #f8f9fa; }
    .dropdown-item.active, .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #007bff; }
    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: transparent; }

    .dropdown-menu.show {
        display: block; }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #6c757d;
        white-space: nowrap; }

    .dropdown-item-text {
        display: block;
        padding: 0.25rem 1.5rem;
        color: #212529; }

    .btn-group,
    .btn-group-vertical {
        position: relative;
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        vertical-align: middle; }
    .btn-group > .btn,
    .btn-group-vertical > .btn {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto; }
    .btn-group > .btn:hover,
    .btn-group-vertical > .btn:hover {
        z-index: 1; }
    .btn-group > .btn:focus, .btn-group > .btn:active, .btn-group > .btn.active,
    .btn-group-vertical > .btn:focus,
    .btn-group-vertical > .btn:active,
    .btn-group-vertical > .btn.active {
        z-index: 1; }

    .btn-toolbar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start; }
    .btn-toolbar .input-group {
        width: auto; }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) {
        margin-left: -1px; }

    .btn-group > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group > .btn-group:not(:last-child) > .btn {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }

    .btn-group > .btn:not(:first-child),
    .btn-group > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .dropdown-toggle-split {
        padding-right: 0.5625rem;
        padding-left: 0.5625rem; }
    .dropdown-toggle-split::after,
    .dropup .dropdown-toggle-split::after,
    .dropright .dropdown-toggle-split::after {
        margin-left: 0; }
    .dropleft .dropdown-toggle-split::before {
        margin-right: 0; }

    .btn-sm + .dropdown-toggle-split, .btn-group-sm > .btn + .dropdown-toggle-split {
        padding-right: 0.375rem;
        padding-left: 0.375rem; }

    .btn-lg + .dropdown-toggle-split, .btn-group-lg > .btn + .dropdown-toggle-split {
        padding-right: 0.75rem;
        padding-left: 0.75rem; }

    .btn-group-vertical {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center; }
    .btn-group-vertical > .btn,
    .btn-group-vertical > .btn-group {
        width: 100%; }
    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) {
        margin-top: -1px; }
    .btn-group-vertical > .btn:not(:last-child):not(.dropdown-toggle),
    .btn-group-vertical > .btn-group:not(:last-child) > .btn {
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .btn-group-vertical > .btn:not(:first-child),
    .btn-group-vertical > .btn-group:not(:first-child) > .btn {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .btn-group-toggle > .btn,
    .btn-group-toggle > .btn-group > .btn {
        margin-bottom: 0; }
    .btn-group-toggle > .btn input[type="radio"],
    .btn-group-toggle > .btn input[type="checkbox"],
    .btn-group-toggle > .btn-group > .btn input[type="radio"],
    .btn-group-toggle > .btn-group > .btn input[type="checkbox"] {
        position: absolute;
        clip: rect(0, 0, 0, 0);
        pointer-events: none; }

    .input-group {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: stretch;
        -ms-flex-align: stretch;
        align-items: stretch;
        width: 100%; }
    .input-group > .form-control,
    .input-group > .form-control-plaintext,
    .input-group > .custom-select,
    .input-group > .custom-file {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        width: 1%;
        margin-bottom: 0; }
    .input-group > .form-control + .form-control,
    .input-group > .form-control + .custom-select,
    .input-group > .form-control + .custom-file,
    .input-group > .form-control-plaintext + .form-control,
    .input-group > .form-control-plaintext + .custom-select,
    .input-group > .form-control-plaintext + .custom-file,
    .input-group > .custom-select + .form-control,
    .input-group > .custom-select + .custom-select,
    .input-group > .custom-select + .custom-file,
    .input-group > .custom-file + .form-control,
    .input-group > .custom-file + .custom-select,
    .input-group > .custom-file + .custom-file {
        margin-left: -1px; }
    .input-group > .form-control:focus,
    .input-group > .custom-select:focus,
    .input-group > .custom-file .custom-file-input:focus ~ .custom-file-label {
        z-index: 3; }
    .input-group > .custom-file .custom-file-input:focus {
        z-index: 4; }
    .input-group > .form-control:not(:last-child),
    .input-group > .custom-select:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
    .input-group > .form-control:not(:first-child),
    .input-group > .custom-select:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }
    .input-group > .custom-file {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }
    .input-group > .custom-file:not(:last-child) .custom-file-label,
    .input-group > .custom-file:not(:last-child) .custom-file-label::after {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }
    .input-group > .custom-file:not(:first-child) .custom-file-label {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .input-group-prepend,
    .input-group-append {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex; }
    .input-group-prepend .btn,
    .input-group-append .btn {
        position: relative;
        z-index: 2; }
    .input-group-prepend .btn:focus,
    .input-group-append .btn:focus {
        z-index: 3; }
    .input-group-prepend .btn + .btn,
    .input-group-prepend .btn + .input-group-text,
    .input-group-prepend .input-group-text + .input-group-text,
    .input-group-prepend .input-group-text + .btn,
    .input-group-append .btn + .btn,
    .input-group-append .btn + .input-group-text,
    .input-group-append .input-group-text + .input-group-text,
    .input-group-append .input-group-text + .btn {
        margin-left: -1px; }

    .input-group-prepend {
        margin-right: -1px; }

    .input-group-append {
        margin-left: -1px; }

    .input-group-text {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.375rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        text-align: center;
        white-space: nowrap;
        background-color: #e9ecef;
        border: 1px solid #ced4da;
        border-radius: 0.25rem; }
    .input-group-text input[type="radio"],
    .input-group-text input[type="checkbox"] {
        margin-top: 0; }

    .input-group-lg > .form-control:not(textarea),
    .input-group-lg > .custom-select {
        height: calc(1.5em + 1rem + 2px); }

    .input-group-lg > .form-control,
    .input-group-lg > .custom-select,
    .input-group-lg > .input-group-prepend > .input-group-text,
    .input-group-lg > .input-group-append > .input-group-text,
    .input-group-lg > .input-group-prepend > .btn,
    .input-group-lg > .input-group-append > .btn {
        padding: 0.5rem 1rem;
        font-size: 1.25rem;
        line-height: 1.5;
        border-radius: 0.3rem; }

    .input-group-sm > .form-control:not(textarea),
    .input-group-sm > .custom-select {
        height: calc(1.5em + 0.5rem + 2px); }

    .input-group-sm > .form-control,
    .input-group-sm > .custom-select,
    .input-group-sm > .input-group-prepend > .input-group-text,
    .input-group-sm > .input-group-append > .input-group-text,
    .input-group-sm > .input-group-prepend > .btn,
    .input-group-sm > .input-group-append > .btn {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5;
        border-radius: 0.2rem; }

    .input-group-lg > .custom-select,
    .input-group-sm > .custom-select {
        padding-right: 1.75rem; }

    .input-group > .input-group-prepend > .btn,
    .input-group > .input-group-prepend > .input-group-text,
    .input-group > .input-group-append:not(:last-child) > .btn,
    .input-group > .input-group-append:not(:last-child) > .input-group-text,
    .input-group > .input-group-append:last-child > .btn:not(:last-child):not(.dropdown-toggle),
    .input-group > .input-group-append:last-child > .input-group-text:not(:last-child) {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0; }

    .input-group > .input-group-append > .btn,
    .input-group > .input-group-append > .input-group-text,
    .input-group > .input-group-prepend:not(:first-child) > .btn,
    .input-group > .input-group-prepend:not(:first-child) > .input-group-text,
    .input-group > .input-group-prepend:first-child > .btn:not(:first-child),
    .input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
        border-top-left-radius: 0;
        border-bottom-left-radius: 0; }

    .custom-control {
        position: relative;
        display: block;
        min-height: 1.5rem;
        padding-left: 1.5rem; }

    .custom-control-inline {
        display: -webkit-inline-box;
        display: -ms-inline-flexbox;
        display: inline-flex;
        margin-right: 1rem; }

    .custom-control-input {
        position: absolute;
        z-index: -1;
        opacity: 0; }
    .custom-control-input:checked ~ .custom-control-label::before {
        color: #fff;
        border-color: #007bff;
        background-color: #007bff; }
    .custom-control-input:focus ~ .custom-control-label::before {
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-control-input:focus:not(:checked) ~ .custom-control-label::before {
        border-color: #80bdff; }
    .custom-control-input:not(:disabled):active ~ .custom-control-label::before {
        color: #fff;
        background-color: #b3d7ff;
        border-color: #b3d7ff; }
    .custom-control-input:disabled ~ .custom-control-label {
        color: #6c757d; }
    .custom-control-input:disabled ~ .custom-control-label::before {
        background-color: #e9ecef; }

    .custom-control-label {
        position: relative;
        margin-bottom: 0;
        vertical-align: top; }
    .custom-control-label::before {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        pointer-events: none;
        content: "";
        background-color: #fff;
        border: #adb5bd solid 1px; }
    .custom-control-label::after {
        position: absolute;
        top: 0.25rem;
        left: -1.5rem;
        display: block;
        width: 1rem;
        height: 1rem;
        content: "";
        background: no-repeat 50% / 50% 50%; }

    .custom-checkbox .custom-control-label::before {
        border-radius: 0.25rem; }

    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e"); }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::before {
        border-color: #007bff;
        background-color: #007bff; }

    .custom-checkbox .custom-control-input:indeterminate ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 4'%3e%3cpath stroke='%23fff' d='M0 2h4'/%3e%3c/svg%3e"); }

    .custom-checkbox .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5); }

    .custom-checkbox .custom-control-input:disabled:indeterminate ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5); }

    .custom-radio .custom-control-label::before {
        border-radius: 50%; }

    .custom-radio .custom-control-input:checked ~ .custom-control-label::after {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='-4 -4 8 8'%3e%3ccircle r='3' fill='%23fff'/%3e%3c/svg%3e"); }

    .custom-radio .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5); }

    .custom-switch {
        padding-left: 2.25rem; }
    .custom-switch .custom-control-label::before {
        left: -2.25rem;
        width: 1.75rem;
        pointer-events: all;
        border-radius: 0.5rem; }
    .custom-switch .custom-control-label::after {
        top: calc(0.25rem + 2px);
        left: calc(-2.25rem + 2px);
        width: calc(1rem - 4px);
        height: calc(1rem - 4px);
        background-color: #adb5bd;
        border-radius: 0.5rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: transform 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-transform 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .custom-switch .custom-control-label::after {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .custom-switch .custom-control-input:checked ~ .custom-control-label::after {
        background-color: #fff;
        -webkit-transform: translateX(0.75rem);
        -ms-transform: translateX(0.75rem);
        transform: translateX(0.75rem); }
    .custom-switch .custom-control-input:disabled:checked ~ .custom-control-label::before {
        background-color: rgba(0, 123, 255, 0.5); }

    .custom-select {
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 1.75rem 0.375rem 0.75rem;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        vertical-align: middle;
        background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }
    .custom-select:focus {
        border-color: #80bdff;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-select:focus::-ms-value {
        color: #495057;
        background-color: #fff; }
    .custom-select[multiple], .custom-select[size]:not([size="1"]) {
        height: auto;
        padding-right: 0.75rem;
        background-image: none; }
    .custom-select:disabled {
        color: #6c757d;
        background-color: #e9ecef; }
    .custom-select::-ms-expand {
        display: none; }

    .custom-select-sm {
        height: calc(1.5em + 0.5rem + 2px);
        padding-top: 0.25rem;
        padding-bottom: 0.25rem;
        padding-left: 0.5rem;
        font-size: 0.875rem; }

    .custom-select-lg {
        height: calc(1.5em + 1rem + 2px);
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        padding-left: 1rem;
        font-size: 1.25rem; }

    .custom-file {
        position: relative;
        display: inline-block;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin-bottom: 0; }

    .custom-file-input {
        position: relative;
        z-index: 2;
        width: 100%;
        height: calc(1.5em + 0.75rem + 2px);
        margin: 0;
        opacity: 0; }
    .custom-file-input:focus ~ .custom-file-label {
        border-color: #80bdff;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-file-input:disabled ~ .custom-file-label {
        background-color: #e9ecef; }
    .custom-file-input:lang(en) ~ .custom-file-label::after {
        content: "Browse"; }
    .custom-file-input ~ .custom-file-label[data-browse]::after {
        content: attr(data-browse); }

    .custom-file-label {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1;
        height: calc(1.5em + 0.75rem + 2px);
        padding: 0.375rem 0.75rem;
        font-weight: 400;
        line-height: 1.5;
        color: #495057;
        background-color: #fff;
        border: 1px solid #ced4da;
        border-radius: 0.25rem; }
    .custom-file-label::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        z-index: 3;
        display: block;
        height: calc(1.5em + 0.75rem);
        padding: 0.375rem 0.75rem;
        line-height: 1.5;
        color: #495057;
        content: "Browse";
        background-color: #e9ecef;
        border-left: inherit;
        border-radius: 0 0.25rem 0.25rem 0; }

    .custom-range {
        width: 100%;
        height: calc(1rem + 0.4rem);
        padding: 0;
        background-color: transparent;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }
    .custom-range:focus {
        outline: none; }
    .custom-range:focus::-webkit-slider-thumb {
        -webkit-box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-moz-range-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range:focus::-ms-thumb {
        box-shadow: 0 0 0 1px #fff, 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }
    .custom-range::-moz-focus-outer {
        border: 0; }
    .custom-range::-webkit-slider-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: -0.25rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -webkit-appearance: none;
        appearance: none; }
    @media (prefers-reduced-motion: reduce) {
        .custom-range::-webkit-slider-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .custom-range::-webkit-slider-thumb:active {
        background-color: #b3d7ff; }
    .custom-range::-webkit-slider-runnable-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem; }
    .custom-range::-moz-range-thumb {
        width: 1rem;
        height: 1rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -moz-appearance: none;
        appearance: none; }
    @media (prefers-reduced-motion: reduce) {
        .custom-range::-moz-range-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .custom-range::-moz-range-thumb:active {
        background-color: #b3d7ff; }
    .custom-range::-moz-range-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: #dee2e6;
        border-color: transparent;
        border-radius: 1rem; }
    .custom-range::-ms-thumb {
        width: 1rem;
        height: 1rem;
        margin-top: 0;
        margin-right: 0.2rem;
        margin-left: 0.2rem;
        background-color: #007bff;
        border: 0;
        border-radius: 1rem;
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        appearance: none; }
    @media (prefers-reduced-motion: reduce) {
        .custom-range::-ms-thumb {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .custom-range::-ms-thumb:active {
        background-color: #b3d7ff; }
    .custom-range::-ms-track {
        width: 100%;
        height: 0.5rem;
        color: transparent;
        cursor: pointer;
        background-color: transparent;
        border-color: transparent;
        border-width: 0.5rem; }
    .custom-range::-ms-fill-lower {
        background-color: #dee2e6;
        border-radius: 1rem; }
    .custom-range::-ms-fill-upper {
        margin-right: 15px;
        background-color: #dee2e6;
        border-radius: 1rem; }
    .custom-range:disabled::-webkit-slider-thumb {
        background-color: #adb5bd; }
    .custom-range:disabled::-webkit-slider-runnable-track {
        cursor: default; }
    .custom-range:disabled::-moz-range-thumb {
        background-color: #adb5bd; }
    .custom-range:disabled::-moz-range-track {
        cursor: default; }
    .custom-range:disabled::-ms-thumb {
        background-color: #adb5bd; }

    .custom-control-label::before,
    .custom-file-label,
    .custom-select {
        -webkit-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .custom-control-label::before,
        .custom-file-label,
        .custom-select {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }

    .nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }

    .nav-link {
        display: block;
        padding: 0.5rem 1rem; }
    .nav-link:hover, .nav-link:focus {
        text-decoration: none; }
    .nav-link.disabled {
        color: #6c757d;
        pointer-events: none;
        cursor: default; }

    .nav-tabs {
        border-bottom: 1px solid #dee2e6; }
    .nav-tabs .nav-item {
        margin-bottom: -1px; }
    .nav-tabs .nav-link {
        border: 1px solid transparent;
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .nav-tabs .nav-link:hover, .nav-tabs .nav-link:focus {
        border-color: #e9ecef #e9ecef #dee2e6; }
    .nav-tabs .nav-link.disabled {
        color: #6c757d;
        background-color: transparent;
        border-color: transparent; }
    .nav-tabs .nav-link.active,
    .nav-tabs .nav-item.show .nav-link {
        color: #495057;
        background-color: #fff;
        border-color: #dee2e6 #dee2e6 #fff; }
    .nav-tabs .dropdown-menu {
        margin-top: -1px;
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .nav-pills .nav-link {
        border-radius: 0.25rem; }

    .nav-pills .nav-link.active,
    .nav-pills .show > .nav-link {
        color: #fff;
        background-color: #007bff; }

    .nav-fill .nav-item {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        text-align: center; }

    .nav-justified .nav-item {
        -ms-flex-preferred-size: 0;
        flex-basis: 0;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        text-align: center; }

    .tab-content > .tab-pane {
        display: none; }

    .tab-content > .active {
        display: block; }

    .navbar {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 0.5rem 1rem; }
    .navbar > .container,
    .navbar > .container-fluid {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between; }

    .navbar-brand {
        display: inline-block;
        padding-top: 0.3125rem;
        padding-bottom: 0.3125rem;
        margin-right: 1rem;
        font-size: 1.25rem;
        line-height: inherit;
        white-space: nowrap; }
    .navbar-brand:hover, .navbar-brand:focus {
        text-decoration: none; }

    .navbar-nav {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0;
        list-style: none; }
    .navbar-nav .nav-link {
        padding-right: 0;
        padding-left: 0; }
    .navbar-nav .dropdown-menu {
        position: static;
        float: none; }

    .navbar-text {
        display: inline-block;
        padding-top: 0.5rem;
        padding-bottom: 0.5rem; }

    .navbar-collapse {
        -ms-flex-preferred-size: 100%;
        flex-basis: 100%;
        -webkit-box-flex: 1;
        -ms-flex-positive: 1;
        flex-grow: 1;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center; }

    .navbar-toggler {
        padding: 0.25rem 0.75rem;
        font-size: 1.25rem;
        line-height: 1;
        background-color: transparent;
        border: 1px solid transparent;
        border-radius: 0.25rem; }
    .navbar-toggler:hover, .navbar-toggler:focus {
        text-decoration: none; }

    .navbar-toggler-icon {
        display: inline-block;
        width: 1.5em;
        height: 1.5em;
        vertical-align: middle;
        content: "";
        background: no-repeat center center;
        background-size: 100% 100%; }

    @media (max-width: 575.98px) {
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 576px) {
        .navbar-expand-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start; }
        .navbar-expand-sm .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .navbar-expand-sm .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-sm .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-sm > .container,
        .navbar-expand-sm > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap; }
        .navbar-expand-sm .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto; }
        .navbar-expand-sm .navbar-toggler {
            display: none; } }

    @media (max-width: 767.98px) {
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 768px) {
        .navbar-expand-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start; }
        .navbar-expand-md .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .navbar-expand-md .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-md .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-md > .container,
        .navbar-expand-md > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap; }
        .navbar-expand-md .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto; }
        .navbar-expand-md .navbar-toggler {
            display: none; } }

    @media (max-width: 991.98px) {
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 992px) {
        .navbar-expand-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start; }
        .navbar-expand-lg .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .navbar-expand-lg .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-lg .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-lg > .container,
        .navbar-expand-lg > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap; }
        .navbar-expand-lg .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto; }
        .navbar-expand-lg .navbar-toggler {
            display: none; } }

    @media (max-width: 1199.98px) {
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            padding-right: 0;
            padding-left: 0; } }

    @media (min-width: 1200px) {
        .navbar-expand-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row nowrap;
            flex-flow: row nowrap;
            -webkit-box-pack: start;
            -ms-flex-pack: start;
            justify-content: flex-start; }
        .navbar-expand-xl .navbar-nav {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .navbar-expand-xl .navbar-nav .dropdown-menu {
            position: absolute; }
        .navbar-expand-xl .navbar-nav .nav-link {
            padding-right: 0.5rem;
            padding-left: 0.5rem; }
        .navbar-expand-xl > .container,
        .navbar-expand-xl > .container-fluid {
            -ms-flex-wrap: nowrap;
            flex-wrap: nowrap; }
        .navbar-expand-xl .navbar-collapse {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -ms-flex-preferred-size: auto;
            flex-basis: auto; }
        .navbar-expand-xl .navbar-toggler {
            display: none; } }

    .navbar-expand {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-flow: row nowrap;
        flex-flow: row nowrap;
        -webkit-box-pack: start;
        -ms-flex-pack: start;
        justify-content: flex-start; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        padding-right: 0;
        padding-left: 0; }
    .navbar-expand .navbar-nav {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row; }
    .navbar-expand .navbar-nav .dropdown-menu {
        position: absolute; }
    .navbar-expand .navbar-nav .nav-link {
        padding-right: 0.5rem;
        padding-left: 0.5rem; }
    .navbar-expand > .container,
    .navbar-expand > .container-fluid {
        -ms-flex-wrap: nowrap;
        flex-wrap: nowrap; }
    .navbar-expand .navbar-collapse {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important;
        -ms-flex-preferred-size: auto;
        flex-basis: auto; }
    .navbar-expand .navbar-toggler {
        display: none; }

    .navbar-light .navbar-brand {
        color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-brand:hover, .navbar-light .navbar-brand:focus {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-light .navbar-nav .nav-link {
        color: rgba(0, 0, 0, 0.5); }
    .navbar-light .navbar-nav .nav-link:hover, .navbar-light .navbar-nav .nav-link:focus {
        color: rgba(0, 0, 0, 0.7); }
    .navbar-light .navbar-nav .nav-link.disabled {
        color: rgba(0, 0, 0, 0.3); }

    .navbar-light .navbar-nav .show > .nav-link,
    .navbar-light .navbar-nav .active > .nav-link,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .nav-link.active {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1); }

    .navbar-light .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(0, 0, 0, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

    .navbar-light .navbar-text {
        color: rgba(0, 0, 0, 0.5); }
    .navbar-light .navbar-text a {
        color: rgba(0, 0, 0, 0.9); }
    .navbar-light .navbar-text a:hover, .navbar-light .navbar-text a:focus {
        color: rgba(0, 0, 0, 0.9); }

    .navbar-dark .navbar-brand {
        color: #fff; }
    .navbar-dark .navbar-brand:hover, .navbar-dark .navbar-brand:focus {
        color: #fff; }

    .navbar-dark .navbar-nav .nav-link {
        color: rgba(255, 255, 255, 0.5); }
    .navbar-dark .navbar-nav .nav-link:hover, .navbar-dark .navbar-nav .nav-link:focus {
        color: rgba(255, 255, 255, 0.75); }
    .navbar-dark .navbar-nav .nav-link.disabled {
        color: rgba(255, 255, 255, 0.25); }

    .navbar-dark .navbar-nav .show > .nav-link,
    .navbar-dark .navbar-nav .active > .nav-link,
    .navbar-dark .navbar-nav .nav-link.show,
    .navbar-dark .navbar-nav .nav-link.active {
        color: #fff; }

    .navbar-dark .navbar-toggler {
        color: rgba(255, 255, 255, 0.5);
        border-color: rgba(255, 255, 255, 0.1); }

    .navbar-dark .navbar-toggler-icon {
        background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3e%3cpath stroke='rgba(255, 255, 255, 0.5)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e"); }

    .navbar-dark .navbar-text {
        color: rgba(255, 255, 255, 0.5); }
    .navbar-dark .navbar-text a {
        color: #fff; }
    .navbar-dark .navbar-text a:hover, .navbar-dark .navbar-text a:focus {
        color: #fff; }

    .card {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: 0.25rem; }
    .card > hr {
        margin-right: 0;
        margin-left: 0; }
    .card > .list-group:first-child .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .card > .list-group:last-child .list-group-item:last-child {
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.25rem; }

    .card-title {
        margin-bottom: 0.75rem; }

    .card-subtitle {
        margin-top: -0.375rem;
        margin-bottom: 0; }

    .card-text:last-child {
        margin-bottom: 0; }

    .card-link:hover {
        text-decoration: none; }

    .card-link + .card-link {
        margin-left: 1.25rem; }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, 0.03);
        border-bottom: 1px solid rgba(0, 0, 0, 0.125); }
    .card-header:first-child {
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0; }
    .card-header + .list-group .list-group-item:first-child {
        border-top: 0; }

    .card-footer {
        padding: 0.75rem 1.25rem;
        background-color: rgba(0, 0, 0, 0.03);
        border-top: 1px solid rgba(0, 0, 0, 0.125); }
    .card-footer:last-child {
        border-radius: 0 0 calc(0.25rem - 1px) calc(0.25rem - 1px); }

    .card-header-tabs {
        margin-right: -0.625rem;
        margin-bottom: -0.75rem;
        margin-left: -0.625rem;
        border-bottom: 0; }

    .card-header-pills {
        margin-right: -0.625rem;
        margin-left: -0.625rem; }

    .card-img-overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        padding: 1.25rem; }

    .card-img {
        width: 100%;
        border-radius: calc(0.25rem - 1px); }

    .card-img-top {
        width: 100%;
        border-top-left-radius: calc(0.25rem - 1px);
        border-top-right-radius: calc(0.25rem - 1px); }

    .card-img-bottom {
        width: 100%;
        border-bottom-right-radius: calc(0.25rem - 1px);
        border-bottom-left-radius: calc(0.25rem - 1px); }

    .card-deck {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column; }
    .card-deck .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-deck {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap;
            margin-right: -15px;
            margin-left: -15px; }
        .card-deck .card {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-right: 15px;
            margin-bottom: 0;
            margin-left: 15px; } }

    .card-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column; }
    .card-group > .card {
        margin-bottom: 15px; }
    @media (min-width: 576px) {
        .card-group {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-flow: row wrap;
            flex-flow: row wrap; }
        .card-group > .card {
            -webkit-box-flex: 1;
            -ms-flex: 1 0 0%;
            flex: 1 0 0%;
            margin-bottom: 0; }
        .card-group > .card + .card {
            margin-left: 0;
            border-left: 0; }
        .card-group > .card:not(:last-child) {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-top,
        .card-group > .card:not(:last-child) .card-header {
            border-top-right-radius: 0; }
        .card-group > .card:not(:last-child) .card-img-bottom,
        .card-group > .card:not(:last-child) .card-footer {
            border-bottom-right-radius: 0; }
        .card-group > .card:not(:first-child) {
            border-top-left-radius: 0;
            border-bottom-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-top,
        .card-group > .card:not(:first-child) .card-header {
            border-top-left-radius: 0; }
        .card-group > .card:not(:first-child) .card-img-bottom,
        .card-group > .card:not(:first-child) .card-footer {
            border-bottom-left-radius: 0; } }

    .card-columns .card {
        margin-bottom: 0.75rem; }

    @media (min-width: 576px) {
        .card-columns {
            -webkit-column-count: 3;
            column-count: 3;
            -webkit-column-gap: 1.25rem;
            column-gap: 1.25rem;
            orphans: 1;
            widows: 1; }
        .card-columns .card {
            display: inline-block;
            width: 100%; } }

    .accordion > .card {
        overflow: hidden; }
    .accordion > .card:not(:first-of-type) .card-header:first-child {
        border-radius: 0; }
    .accordion > .card:not(:first-of-type):not(:last-of-type) {
        border-bottom: 0;
        border-radius: 0; }
    .accordion > .card:first-of-type {
        border-bottom: 0;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0; }
    .accordion > .card:last-of-type {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }
    .accordion > .card .card-header {
        margin-bottom: -1px; }

    .breadcrumb {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-wrap: wrap;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: #e9ecef;
        border-radius: 0.25rem; }

    .breadcrumb-item + .breadcrumb-item {
        padding-left: 0.5rem; }
    .breadcrumb-item + .breadcrumb-item::before {
        display: inline-block;
        padding-right: 0.5rem;
        color: #6c757d;
        content: "/"; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: underline; }

    .breadcrumb-item + .breadcrumb-item:hover::before {
        text-decoration: none; }

    .breadcrumb-item.active {
        color: #6c757d; }

    .pagination {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        padding-left: 0;
        list-style: none;
        border-radius: 0.25rem; }

    .page-link {
        position: relative;
        display: block;
        padding: 0.5rem 0.75rem;
        margin-left: -1px;
        line-height: 1.25;
        color: #007bff;
        background-color: #fff;
        border: 1px solid #dee2e6; }
    .page-link:hover {
        z-index: 2;
        color: #0056b3;
        text-decoration: none;
        background-color: #e9ecef;
        border-color: #dee2e6; }
    .page-link:focus {
        z-index: 2;
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); }

    .page-item:first-child .page-link {
        margin-left: 0;
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }

    .page-item:last-child .page-link {
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem; }

    .page-item.active .page-link {
        z-index: 1;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }

    .page-item.disabled .page-link {
        color: #6c757d;
        pointer-events: none;
        cursor: auto;
        background-color: #fff;
        border-color: #dee2e6; }

    .pagination-lg .page-link {
        padding: 0.75rem 1.5rem;
        font-size: 1.25rem;
        line-height: 1.5; }

    .pagination-lg .page-item:first-child .page-link {
        border-top-left-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem; }

    .pagination-lg .page-item:last-child .page-link {
        border-top-right-radius: 0.3rem;
        border-bottom-right-radius: 0.3rem; }

    .pagination-sm .page-link {
        padding: 0.25rem 0.5rem;
        font-size: 0.875rem;
        line-height: 1.5; }

    .pagination-sm .page-item:first-child .page-link {
        border-top-left-radius: 0.2rem;
        border-bottom-left-radius: 0.2rem; }

    .pagination-sm .page-item:last-child .page-link {
        border-top-right-radius: 0.2rem;
        border-bottom-right-radius: 0.2rem; }

    .badge {
        display: inline-block;
        padding: 0.25em 0.4em;
        font-size: 75%;
        font-weight: 700;
        line-height: 1;
        text-align: center;
        white-space: nowrap;
        vertical-align: baseline;
        border-radius: 0.25rem;
        -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
        -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .badge {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    a.badge:hover, a.badge:focus {
        text-decoration: none; }
    .badge:empty {
        display: none; }

    .btn .badge {
        position: relative;
        top: -1px; }

    .badge-pill {
        padding-right: 0.6em;
        padding-left: 0.6em;
        border-radius: 10rem; }

    .badge-primary {
        color: #fff;
        background-color: #007bff; }
    a.badge-primary:hover, a.badge-primary:focus {
        color: #fff;
        background-color: #0062cc; }
    a.badge-primary:focus, a.badge-primary.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.5); }

    .badge-secondary {
        color: #fff;
        background-color: #6c757d; }
    a.badge-secondary:hover, a.badge-secondary:focus {
        color: #fff;
        background-color: #545b62; }
    a.badge-secondary:focus, a.badge-secondary.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(108, 117, 125, 0.5); }

    .badge-success {
        color: #fff;
        background-color: #28a745; }
    a.badge-success:hover, a.badge-success:focus {
        color: #fff;
        background-color: #1e7e34; }
    a.badge-success:focus, a.badge-success.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(40, 167, 69, 0.5); }

    .badge-info {
        color: #fff;
        background-color: #17a2b8; }
    a.badge-info:hover, a.badge-info:focus {
        color: #fff;
        background-color: #117a8b; }
    a.badge-info:focus, a.badge-info.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(23, 162, 184, 0.5); }

    .badge-warning {
        color: #212529;
        background-color: #ffc107; }
    a.badge-warning:hover, a.badge-warning:focus {
        color: #212529;
        background-color: #d39e00; }
    a.badge-warning:focus, a.badge-warning.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(255, 193, 7, 0.5); }

    .badge-danger {
        color: #fff;
        background-color: #dc3545; }
    a.badge-danger:hover, a.badge-danger:focus {
        color: #fff;
        background-color: #bd2130; }
    a.badge-danger:focus, a.badge-danger.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.5); }

    .badge-light {
        color: #212529;
        background-color: #f8f9fa; }
    a.badge-light:hover, a.badge-light:focus {
        color: #212529;
        background-color: #dae0e5; }
    a.badge-light:focus, a.badge-light.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(248, 249, 250, 0.5); }

    .badge-dark {
        color: #fff;
        background-color: #343a40; }
    a.badge-dark:hover, a.badge-dark:focus {
        color: #fff;
        background-color: #1d2124; }
    a.badge-dark:focus, a.badge-dark.focus {
        outline: 0;
        -webkit-box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5);
        box-shadow: 0 0 0 0.2rem rgba(52, 58, 64, 0.5); }

    .jumbotron {
        padding: 2rem 1rem;
        margin-bottom: 2rem;
        background-color: #e9ecef;
        border-radius: 0.3rem; }
    @media (min-width: 576px) {
        .jumbotron {
            padding: 4rem 2rem; } }

    .jumbotron-fluid {
        padding-right: 0;
        padding-left: 0;
        border-radius: 0; }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem; }

    .alert-heading {
        color: inherit; }

    .alert-link {
        font-weight: 700; }

    .alert-dismissible {
        padding-right: 4rem; }
    .alert-dismissible .close {
        position: absolute;
        top: 0;
        right: 0;
        padding: 0.75rem 1.25rem;
        color: inherit; }

    .alert-primary {
        color: #004085;
        background-color: #cce5ff;
        border-color: #b8daff; }
    .alert-primary hr {
        border-top-color: #9fcdff; }
    .alert-primary .alert-link {
        color: #002752; }

    .alert-secondary {
        color: #383d41;
        background-color: #e2e3e5;
        border-color: #d6d8db; }
    .alert-secondary hr {
        border-top-color: #c8cbcf; }
    .alert-secondary .alert-link {
        color: #202326; }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb; }
    .alert-success hr {
        border-top-color: #b1dfbb; }
    .alert-success .alert-link {
        color: #0b2e13; }

    .alert-info {
        color: #0c5460;
        background-color: #d1ecf1;
        border-color: #bee5eb; }
    .alert-info hr {
        border-top-color: #abdde5; }
    .alert-info .alert-link {
        color: #062c33; }

    .alert-warning {
        color: #856404;
        background-color: #fff3cd;
        border-color: #ffeeba; }
    .alert-warning hr {
        border-top-color: #ffe8a1; }
    .alert-warning .alert-link {
        color: #533f03; }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb; }
    .alert-danger hr {
        border-top-color: #f1b0b7; }
    .alert-danger .alert-link {
        color: #491217; }

    .alert-light {
        color: #818182;
        background-color: #fefefe;
        border-color: #fdfdfe; }
    .alert-light hr {
        border-top-color: #ececf6; }
    .alert-light .alert-link {
        color: #686868; }

    .alert-dark {
        color: #1b1e21;
        background-color: #d6d8d9;
        border-color: #c6c8ca; }
    .alert-dark hr {
        border-top-color: #b9bbbe; }
    .alert-dark .alert-link {
        color: #040505; }

    @-webkit-keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

    @keyframes progress-bar-stripes {
        from {
            background-position: 1rem 0; }
        to {
            background-position: 0 0; } }

    .progress {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        height: 1rem;
        overflow: hidden;
        font-size: 0.75rem;
        background-color: #e9ecef;
        border-radius: 0.25rem; }

    .progress-bar {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #007bff;
        -webkit-transition: width 0.6s ease;
        -o-transition: width 0.6s ease;
        transition: width 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
        .progress-bar {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }

    .progress-bar-striped {
        background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
        background-size: 1rem 1rem; }

    .progress-bar-animated {
        -webkit-animation: progress-bar-stripes 1s linear infinite;
        animation: progress-bar-stripes 1s linear infinite; }
    @media (prefers-reduced-motion: reduce) {
        .progress-bar-animated {
            -webkit-animation: none;
            animation: none; } }

    .media {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start; }

    .media-body {
        -webkit-box-flex: 1;
        -ms-flex: 1;
        flex: 1; }

    .list-group {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        padding-left: 0;
        margin-bottom: 0; }

    .list-group-item-action {
        width: 100%;
        color: #495057;
        text-align: inherit; }
    .list-group-item-action:hover, .list-group-item-action:focus {
        z-index: 1;
        color: #495057;
        text-decoration: none;
        background-color: #f8f9fa; }
    .list-group-item-action:active {
        color: #212529;
        background-color: #e9ecef; }

    .list-group-item {
        position: relative;
        display: block;
        padding: 0.75rem 1.25rem;
        margin-bottom: -1px;
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.125); }
    .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-top-right-radius: 0.25rem; }
    .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem; }
    .list-group-item.disabled, .list-group-item:disabled {
        color: #6c757d;
        pointer-events: none;
        background-color: #fff; }
    .list-group-item.active {
        z-index: 2;
        color: #fff;
        background-color: #007bff;
        border-color: #007bff; }

    .list-group-horizontal {
        -webkit-box-orient: horizontal;
        -webkit-box-direction: normal;
        -ms-flex-direction: row;
        flex-direction: row; }
    .list-group-horizontal .list-group-item {
        margin-right: -1px;
        margin-bottom: 0; }
    .list-group-horizontal .list-group-item:first-child {
        border-top-left-radius: 0.25rem;
        border-bottom-left-radius: 0.25rem;
        border-top-right-radius: 0; }
    .list-group-horizontal .list-group-item:last-child {
        margin-right: 0;
        border-top-right-radius: 0.25rem;
        border-bottom-right-radius: 0.25rem;
        border-bottom-left-radius: 0; }

    @media (min-width: 576px) {
        .list-group-horizontal-sm {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .list-group-horizontal-sm .list-group-item {
            margin-right: -1px;
            margin-bottom: 0; }
        .list-group-horizontal-sm .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-sm .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 768px) {
        .list-group-horizontal-md {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .list-group-horizontal-md .list-group-item {
            margin-right: -1px;
            margin-bottom: 0; }
        .list-group-horizontal-md .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-md .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 992px) {
        .list-group-horizontal-lg {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .list-group-horizontal-lg .list-group-item {
            margin-right: -1px;
            margin-bottom: 0; }
        .list-group-horizontal-lg .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-lg .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    @media (min-width: 1200px) {
        .list-group-horizontal-xl {
            -webkit-box-orient: horizontal;
            -webkit-box-direction: normal;
            -ms-flex-direction: row;
            flex-direction: row; }
        .list-group-horizontal-xl .list-group-item {
            margin-right: -1px;
            margin-bottom: 0; }
        .list-group-horizontal-xl .list-group-item:first-child {
            border-top-left-radius: 0.25rem;
            border-bottom-left-radius: 0.25rem;
            border-top-right-radius: 0; }
        .list-group-horizontal-xl .list-group-item:last-child {
            margin-right: 0;
            border-top-right-radius: 0.25rem;
            border-bottom-right-radius: 0.25rem;
            border-bottom-left-radius: 0; } }

    .list-group-flush .list-group-item {
        border-right: 0;
        border-left: 0;
        border-radius: 0; }
    .list-group-flush .list-group-item:last-child {
        margin-bottom: -1px; }

    .list-group-flush:first-child .list-group-item:first-child {
        border-top: 0; }

    .list-group-flush:last-child .list-group-item:last-child {
        margin-bottom: 0;
        border-bottom: 0; }

    .list-group-item-primary {
        color: #004085;
        background-color: #b8daff; }
    .list-group-item-primary.list-group-item-action:hover, .list-group-item-primary.list-group-item-action:focus {
        color: #004085;
        background-color: #9fcdff; }
    .list-group-item-primary.list-group-item-action.active {
        color: #fff;
        background-color: #004085;
        border-color: #004085; }

    .list-group-item-secondary {
        color: #383d41;
        background-color: #d6d8db; }
    .list-group-item-secondary.list-group-item-action:hover, .list-group-item-secondary.list-group-item-action:focus {
        color: #383d41;
        background-color: #c8cbcf; }
    .list-group-item-secondary.list-group-item-action.active {
        color: #fff;
        background-color: #383d41;
        border-color: #383d41; }

    .list-group-item-success {
        color: #155724;
        background-color: #c3e6cb; }
    .list-group-item-success.list-group-item-action:hover, .list-group-item-success.list-group-item-action:focus {
        color: #155724;
        background-color: #b1dfbb; }
    .list-group-item-success.list-group-item-action.active {
        color: #fff;
        background-color: #155724;
        border-color: #155724; }

    .list-group-item-info {
        color: #0c5460;
        background-color: #bee5eb; }
    .list-group-item-info.list-group-item-action:hover, .list-group-item-info.list-group-item-action:focus {
        color: #0c5460;
        background-color: #abdde5; }
    .list-group-item-info.list-group-item-action.active {
        color: #fff;
        background-color: #0c5460;
        border-color: #0c5460; }

    .list-group-item-warning {
        color: #856404;
        background-color: #ffeeba; }
    .list-group-item-warning.list-group-item-action:hover, .list-group-item-warning.list-group-item-action:focus {
        color: #856404;
        background-color: #ffe8a1; }
    .list-group-item-warning.list-group-item-action.active {
        color: #fff;
        background-color: #856404;
        border-color: #856404; }

    .list-group-item-danger {
        color: #721c24;
        background-color: #f5c6cb; }
    .list-group-item-danger.list-group-item-action:hover, .list-group-item-danger.list-group-item-action:focus {
        color: #721c24;
        background-color: #f1b0b7; }
    .list-group-item-danger.list-group-item-action.active {
        color: #fff;
        background-color: #721c24;
        border-color: #721c24; }

    .list-group-item-light {
        color: #818182;
        background-color: #fdfdfe; }
    .list-group-item-light.list-group-item-action:hover, .list-group-item-light.list-group-item-action:focus {
        color: #818182;
        background-color: #ececf6; }
    .list-group-item-light.list-group-item-action.active {
        color: #fff;
        background-color: #818182;
        border-color: #818182; }

    .list-group-item-dark {
        color: #1b1e21;
        background-color: #c6c8ca; }
    .list-group-item-dark.list-group-item-action:hover, .list-group-item-dark.list-group-item-action:focus {
        color: #1b1e21;
        background-color: #b9bbbe; }
    .list-group-item-dark.list-group-item-action.active {
        color: #fff;
        background-color: #1b1e21;
        border-color: #1b1e21; }

    .close {
        float: right;
        font-size: 1.5rem;
        font-weight: 700;
        line-height: 1;
        color: #000;
        text-shadow: 0 1px 0 #fff;
        opacity: .5; }
    .close:hover {
        color: #000;
        text-decoration: none; }
    .close:not(:disabled):not(.disabled):hover, .close:not(:disabled):not(.disabled):focus {
        opacity: .75; }

    button.close {
        padding: 0;
        background-color: transparent;
        border: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none; }

    a.close.disabled {
        pointer-events: none; }

    .toast {
        max-width: 350px;
        overflow: hidden;
        font-size: 0.875rem;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.1);
        -webkit-box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, 0.1);
        -webkit-backdrop-filter: blur(10px);
        backdrop-filter: blur(10px);
        opacity: 0;
        border-radius: 0.25rem; }
    .toast:not(:last-child) {
        margin-bottom: 0.75rem; }
    .toast.showing {
        opacity: 1; }
    .toast.show {
        display: block;
        opacity: 1; }
    .toast.hide {
        display: none; }

    .toast-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        padding: 0.25rem 0.75rem;
        color: #6c757d;
        background-color: rgba(255, 255, 255, 0.85);
        background-clip: padding-box;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05); }

    .toast-body {
        padding: 0.75rem; }

    .modal-open {
        overflow: hidden; }
    .modal-open .modal {
        overflow-x: hidden;
        overflow-y: auto; }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        display: none;
        width: 100%;
        height: 100%;
        overflow: hidden;
        outline: 0; }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none; }
    .modal.fade .modal-dialog {
        -webkit-transition: -webkit-transform 0.3s ease-out;
        transition: -webkit-transform 0.3s ease-out;
        -o-transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out;
        transition: transform 0.3s ease-out, -webkit-transform 0.3s ease-out;
        -webkit-transform: translate(0, -50px);
        -ms-transform: translate(0, -50px);
        transform: translate(0, -50px); }
    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .modal.show .modal-dialog {
        -webkit-transform: none;
        -ms-transform: none;
        transform: none; }

    .modal-dialog-scrollable {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        max-height: calc(100% - 1rem); }
    .modal-dialog-scrollable .modal-content {
        max-height: calc(100vh - 1rem);
        overflow: hidden; }
    .modal-dialog-scrollable .modal-header,
    .modal-dialog-scrollable .modal-footer {
        -ms-flex-negative: 0;
        flex-shrink: 0; }
    .modal-dialog-scrollable .modal-body {
        overflow-y: auto; }

    .modal-dialog-centered {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        min-height: calc(100% - 1rem); }
    .modal-dialog-centered::before {
        display: block;
        height: calc(100vh - 1rem);
        content: ""; }
    .modal-dialog-centered.modal-dialog-scrollable {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        height: 100%; }
    .modal-dialog-centered.modal-dialog-scrollable .modal-content {
        max-height: none; }
    .modal-dialog-centered.modal-dialog-scrollable::before {
        content: none; }

    .modal-content {
        position: relative;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        outline: 0; }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1040;
        width: 100vw;
        height: 100vh;
        background-color: #000; }
    .modal-backdrop.fade {
        opacity: 0; }
    .modal-backdrop.show {
        opacity: 0.5; }

    .modal-header {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: start;
        -ms-flex-align: start;
        align-items: flex-start;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: 0.3rem;
        border-top-right-radius: 0.3rem; }
    .modal-header .close {
        padding: 1rem 1rem;
        margin: -1rem -1rem -1rem auto; }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5; }

    .modal-body {
        position: relative;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1rem; }

    .modal-footer {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: end;
        -ms-flex-pack: end;
        justify-content: flex-end;
        padding: 1rem;
        border-top: 1px solid #dee2e6;
        border-bottom-right-radius: 0.3rem;
        border-bottom-left-radius: 0.3rem; }
    .modal-footer > :not(:first-child) {
        margin-left: .25rem; }
    .modal-footer > :not(:last-child) {
        margin-right: .25rem; }

    .modal-scrollbar-measure {
        position: absolute;
        top: -9999px;
        width: 50px;
        height: 50px;
        overflow: scroll; }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto; }
        .modal-dialog-scrollable {
            max-height: calc(100% - 3.5rem); }
        .modal-dialog-scrollable .modal-content {
            max-height: calc(100vh - 3.5rem); }
        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem); }
        .modal-dialog-centered::before {
            height: calc(100vh - 3.5rem); }
        .modal-sm {
            max-width: 300px; } }

    @media (min-width: 992px) {
        .modal-lg,
        .modal-xl {
            max-width: 800px; } }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px; } }

    .tooltip {
        position: absolute;
        z-index: 1070;
        display: block;
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        opacity: 0; }
    .tooltip.show {
        opacity: 0.9; }
    .tooltip .arrow {
        position: absolute;
        display: block;
        width: 0.8rem;
        height: 0.4rem; }
    .tooltip .arrow::before {
        position: absolute;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-tooltip-top, .bs-tooltip-auto[x-placement^="top"] {
        padding: 0.4rem 0; }
    .bs-tooltip-top .arrow, .bs-tooltip-auto[x-placement^="top"] .arrow {
        bottom: 0; }
    .bs-tooltip-top .arrow::before, .bs-tooltip-auto[x-placement^="top"] .arrow::before {
        top: 0;
        border-width: 0.4rem 0.4rem 0;
        border-top-color: #000; }

    .bs-tooltip-right, .bs-tooltip-auto[x-placement^="right"] {
        padding: 0 0.4rem; }
    .bs-tooltip-right .arrow, .bs-tooltip-auto[x-placement^="right"] .arrow {
        left: 0;
        width: 0.4rem;
        height: 0.8rem; }
    .bs-tooltip-right .arrow::before, .bs-tooltip-auto[x-placement^="right"] .arrow::before {
        right: 0;
        border-width: 0.4rem 0.4rem 0.4rem 0;
        border-right-color: #000; }

    .bs-tooltip-bottom, .bs-tooltip-auto[x-placement^="bottom"] {
        padding: 0.4rem 0; }
    .bs-tooltip-bottom .arrow, .bs-tooltip-auto[x-placement^="bottom"] .arrow {
        top: 0; }
    .bs-tooltip-bottom .arrow::before, .bs-tooltip-auto[x-placement^="bottom"] .arrow::before {
        bottom: 0;
        border-width: 0 0.4rem 0.4rem;
        border-bottom-color: #000; }

    .bs-tooltip-left, .bs-tooltip-auto[x-placement^="left"] {
        padding: 0 0.4rem; }
    .bs-tooltip-left .arrow, .bs-tooltip-auto[x-placement^="left"] .arrow {
        right: 0;
        width: 0.4rem;
        height: 0.8rem; }
    .bs-tooltip-left .arrow::before, .bs-tooltip-auto[x-placement^="left"] .arrow::before {
        left: 0;
        border-width: 0.4rem 0 0.4rem 0.4rem;
        border-left-color: #000; }

    .tooltip-inner {
        max-width: 200px;
        padding: 0.25rem 0.5rem;
        color: #fff;
        text-align: center;
        background-color: #000;
        border-radius: 0.25rem; }

    .popover {
        position: absolute;
        top: 0;
        left: 0;
        z-index: 1060;
        display: block;
        max-width: 276px;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        font-style: normal;
        font-weight: 400;
        line-height: 1.5;
        text-align: left;
        text-align: start;
        text-decoration: none;
        text-shadow: none;
        text-transform: none;
        letter-spacing: normal;
        word-break: normal;
        word-spacing: normal;
        white-space: normal;
        line-break: auto;
        font-size: 0.875rem;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem; }
    .popover .arrow {
        position: absolute;
        display: block;
        width: 1rem;
        height: 0.5rem;
        margin: 0 0.3rem; }
    .popover .arrow::before, .popover .arrow::after {
        position: absolute;
        display: block;
        content: "";
        border-color: transparent;
        border-style: solid; }

    .bs-popover-top, .bs-popover-auto[x-placement^="top"] {
        margin-bottom: 0.5rem; }
    .bs-popover-top > .arrow, .bs-popover-auto[x-placement^="top"] > .arrow {
        bottom: calc((0.5rem + 1px) * -1); }
    .bs-popover-top > .arrow::before, .bs-popover-auto[x-placement^="top"] > .arrow::before {
        bottom: 0;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-top > .arrow::after, .bs-popover-auto[x-placement^="top"] > .arrow::after {
        bottom: 1px;
        border-width: 0.5rem 0.5rem 0;
        border-top-color: #fff; }

    .bs-popover-right, .bs-popover-auto[x-placement^="right"] {
        margin-left: 0.5rem; }
    .bs-popover-right > .arrow, .bs-popover-auto[x-placement^="right"] > .arrow {
        left: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0; }
    .bs-popover-right > .arrow::before, .bs-popover-auto[x-placement^="right"] > .arrow::before {
        left: 0;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-right > .arrow::after, .bs-popover-auto[x-placement^="right"] > .arrow::after {
        left: 1px;
        border-width: 0.5rem 0.5rem 0.5rem 0;
        border-right-color: #fff; }

    .bs-popover-bottom, .bs-popover-auto[x-placement^="bottom"] {
        margin-top: 0.5rem; }
    .bs-popover-bottom > .arrow, .bs-popover-auto[x-placement^="bottom"] > .arrow {
        top: calc((0.5rem + 1px) * -1); }
    .bs-popover-bottom > .arrow::before, .bs-popover-auto[x-placement^="bottom"] > .arrow::before {
        top: 0;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-bottom > .arrow::after, .bs-popover-auto[x-placement^="bottom"] > .arrow::after {
        top: 1px;
        border-width: 0 0.5rem 0.5rem 0.5rem;
        border-bottom-color: #fff; }
    .bs-popover-bottom .popover-header::before, .bs-popover-auto[x-placement^="bottom"] .popover-header::before {
        position: absolute;
        top: 0;
        left: 50%;
        display: block;
        width: 1rem;
        margin-left: -0.5rem;
        content: "";
        border-bottom: 1px solid #f7f7f7; }

    .bs-popover-left, .bs-popover-auto[x-placement^="left"] {
        margin-right: 0.5rem; }
    .bs-popover-left > .arrow, .bs-popover-auto[x-placement^="left"] > .arrow {
        right: calc((0.5rem + 1px) * -1);
        width: 0.5rem;
        height: 1rem;
        margin: 0.3rem 0; }
    .bs-popover-left > .arrow::before, .bs-popover-auto[x-placement^="left"] > .arrow::before {
        right: 0;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: rgba(0, 0, 0, 0.25); }
    .bs-popover-left > .arrow::after, .bs-popover-auto[x-placement^="left"] > .arrow::after {
        right: 1px;
        border-width: 0.5rem 0 0.5rem 0.5rem;
        border-left-color: #fff; }

    .popover-header {
        padding: 0.5rem 0.75rem;
        margin-bottom: 0;
        font-size: 1rem;
        background-color: #f7f7f7;
        border-bottom: 1px solid #ebebeb;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px); }
    .popover-header:empty {
        display: none; }

    .popover-body {
        padding: 0.5rem 0.75rem;
        color: #212529; }

    .carousel {
        position: relative; }

    .carousel.pointer-event {
        -ms-touch-action: pan-y;
        touch-action: pan-y; }

    .carousel-inner {
        position: relative;
        width: 100%;
        overflow: hidden; }
    .carousel-inner::after {
        display: block;
        clear: both;
        content: ""; }

    .carousel-item {
        position: relative;
        display: none;
        float: left;
        width: 100%;
        margin-right: -100%;
        -webkit-backface-visibility: hidden;
        backface-visibility: hidden;
        -webkit-transition: -webkit-transform 0.6s ease-in-out;
        transition: -webkit-transform 0.6s ease-in-out;
        -o-transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out;
        transition: transform 0.6s ease-in-out, -webkit-transform 0.6s ease-in-out; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-item {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }

    .carousel-item.active,
    .carousel-item-next,
    .carousel-item-prev {
        display: block; }

    .carousel-item-next:not(.carousel-item-left),
    .active.carousel-item-right {
        -webkit-transform: translateX(100%);
        -ms-transform: translateX(100%);
        transform: translateX(100%); }

    .carousel-item-prev:not(.carousel-item-right),
    .active.carousel-item-left {
        -webkit-transform: translateX(-100%);
        -ms-transform: translateX(-100%);
        transform: translateX(-100%); }

    .carousel-fade .carousel-item {
        opacity: 0;
        -webkit-transition-property: opacity;
        -o-transition-property: opacity;
        transition-property: opacity;
        -webkit-transform: none;
        -ms-transform: none;
        transform: none; }

    .carousel-fade .carousel-item.active,
    .carousel-fade .carousel-item-next.carousel-item-left,
    .carousel-fade .carousel-item-prev.carousel-item-right {
        z-index: 1;
        opacity: 1; }

    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-right {
        z-index: 0;
        opacity: 0;
        -webkit-transition: 0s 0.6s opacity;
        -o-transition: 0s 0.6s opacity;
        transition: 0s 0.6s opacity; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-fade .active.carousel-item-left,
        .carousel-fade .active.carousel-item-right {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }

    .carousel-control-prev,
    .carousel-control-next {
        position: absolute;
        top: 0;
        bottom: 0;
        z-index: 1;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        width: 15%;
        color: #fff;
        text-align: center;
        opacity: 0.5;
        -webkit-transition: opacity 0.15s ease;
        -o-transition: opacity 0.15s ease;
        transition: opacity 0.15s ease; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-control-prev,
        .carousel-control-next {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .carousel-control-prev:hover, .carousel-control-prev:focus,
    .carousel-control-next:hover,
    .carousel-control-next:focus {
        color: #fff;
        text-decoration: none;
        outline: 0;
        opacity: 0.9; }

    .carousel-control-prev {
        left: 0; }

    .carousel-control-next {
        right: 0; }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: inline-block;
        width: 20px;
        height: 20px;
        background: no-repeat 50% / 100% 100%; }

    .carousel-control-prev-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3e%3c/svg%3e"); }

    .carousel-control-next-icon {
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3e%3cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3e%3c/svg%3e"); }

    .carousel-indicators {
        position: absolute;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 15;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        padding-left: 0;
        margin-right: 15%;
        margin-left: 15%;
        list-style: none; }
    .carousel-indicators li {
        -webkit-box-sizing: content-box;
        box-sizing: content-box;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        width: 30px;
        height: 3px;
        margin-right: 3px;
        margin-left: 3px;
        text-indent: -999px;
        cursor: pointer;
        background-color: #fff;
        background-clip: padding-box;
        border-top: 10px solid transparent;
        border-bottom: 10px solid transparent;
        opacity: .5;
        -webkit-transition: opacity 0.6s ease;
        -o-transition: opacity 0.6s ease;
        transition: opacity 0.6s ease; }
    @media (prefers-reduced-motion: reduce) {
        .carousel-indicators li {
            -webkit-transition: none;
            -o-transition: none;
            transition: none; } }
    .carousel-indicators .active {
        opacity: 1; }

    .carousel-caption {
        position: absolute;
        right: 15%;
        bottom: 20px;
        left: 15%;
        z-index: 10;
        padding-top: 20px;
        padding-bottom: 20px;
        color: #fff;
        text-align: center; }

    @-webkit-keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

    @keyframes spinner-border {
        to {
            -webkit-transform: rotate(360deg);
            transform: rotate(360deg); } }

    .spinner-border {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        border: 0.25em solid currentColor;
        border-right-color: transparent;
        border-radius: 50%;
        -webkit-animation: spinner-border .75s linear infinite;
        animation: spinner-border .75s linear infinite; }

    .spinner-border-sm {
        width: 1rem;
        height: 1rem;
        border-width: 0.2em; }

    @-webkit-keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0); }
        50% {
            opacity: 1; } }

    @keyframes spinner-grow {
        0% {
            -webkit-transform: scale(0);
            transform: scale(0); }
        50% {
            opacity: 1; } }

    .spinner-grow {
        display: inline-block;
        width: 2rem;
        height: 2rem;
        vertical-align: text-bottom;
        background-color: currentColor;
        border-radius: 50%;
        opacity: 0;
        -webkit-animation: spinner-grow .75s linear infinite;
        animation: spinner-grow .75s linear infinite; }

    .spinner-grow-sm {
        width: 1rem;
        height: 1rem; }

    .align-baseline {
        vertical-align: baseline !important; }

    .align-top {
        vertical-align: top !important; }

    .align-middle {
        vertical-align: middle !important; }

    .align-bottom {
        vertical-align: bottom !important; }

    .align-text-bottom {
        vertical-align: text-bottom !important; }

    .align-text-top {
        vertical-align: text-top !important; }

    .bg-primary {
        background-color: #007bff !important; }

    a.bg-primary:hover, a.bg-primary:focus,
    button.bg-primary:hover,
    button.bg-primary:focus {
        background-color: #0062cc !important; }

    .bg-secondary {
        background-color: #6c757d !important; }

    a.bg-secondary:hover, a.bg-secondary:focus,
    button.bg-secondary:hover,
    button.bg-secondary:focus {
        background-color: #545b62 !important; }

    .bg-success {
        background-color: #28a745 !important; }

    a.bg-success:hover, a.bg-success:focus,
    button.bg-success:hover,
    button.bg-success:focus {
        background-color: #1e7e34 !important; }

    .bg-info {
        background-color: #17a2b8 !important; }

    a.bg-info:hover, a.bg-info:focus,
    button.bg-info:hover,
    button.bg-info:focus {
        background-color: #117a8b !important; }

    .bg-warning {
        background-color: #ffc107 !important; }

    a.bg-warning:hover, a.bg-warning:focus,
    button.bg-warning:hover,
    button.bg-warning:focus {
        background-color: #d39e00 !important; }

    .bg-danger {
        background-color: #dc3545 !important; }

    a.bg-danger:hover, a.bg-danger:focus,
    button.bg-danger:hover,
    button.bg-danger:focus {
        background-color: #bd2130 !important; }

    .bg-light {
        background-color: #f8f9fa !important; }

    a.bg-light:hover, a.bg-light:focus,
    button.bg-light:hover,
    button.bg-light:focus {
        background-color: #dae0e5 !important; }

    .bg-dark {
        background-color: #343a40 !important; }

    a.bg-dark:hover, a.bg-dark:focus,
    button.bg-dark:hover,
    button.bg-dark:focus {
        background-color: #1d2124 !important; }

    .bg-white {
        background-color: #fff !important; }

    .bg-transparent {
        background-color: transparent !important; }

    .border {
        border: 1px solid #dee2e6 !important; }

    .border-top {
        border-top: 1px solid #dee2e6 !important; }

    .border-right {
        border-right: 1px solid #dee2e6 !important; }

    .border-bottom {
        border-bottom: 1px solid #dee2e6 !important; }

    .border-left {
        border-left: 1px solid #dee2e6 !important; }

    .border-0 {
        border: 0 !important; }

    .border-top-0 {
        border-top: 0 !important; }

    .border-right-0 {
        border-right: 0 !important; }

    .border-bottom-0 {
        border-bottom: 0 !important; }

    .border-left-0 {
        border-left: 0 !important; }

    .border-primary {
        border-color: #007bff !important; }

    .border-secondary {
        border-color: #6c757d !important; }

    .border-success {
        border-color: #28a745 !important; }

    .border-info {
        border-color: #17a2b8 !important; }

    .border-warning {
        border-color: #ffc107 !important; }

    .border-danger {
        border-color: #dc3545 !important; }

    .border-light {
        border-color: #f8f9fa !important; }

    .border-dark {
        border-color: #343a40 !important; }

    .border-white {
        border-color: #fff !important; }

    .rounded-sm {
        border-radius: 0.2rem !important; }

    .rounded {
        border-radius: 0.25rem !important; }

    .rounded-top {
        border-top-left-radius: 0.25rem !important;
        border-top-right-radius: 0.25rem !important; }

    .rounded-right {
        border-top-right-radius: 0.25rem !important;
        border-bottom-right-radius: 0.25rem !important; }

    .rounded-bottom {
        border-bottom-right-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

    .rounded-left {
        border-top-left-radius: 0.25rem !important;
        border-bottom-left-radius: 0.25rem !important; }

    .rounded-lg {
        border-radius: 0.3rem !important; }

    .rounded-circle {
        border-radius: 50% !important; }

    .rounded-pill {
        border-radius: 50rem !important; }

    .rounded-0 {
        border-radius: 0 !important; }

    .clearfix::after {
        display: block;
        clear: both;
        content: ""; }

    .d-none {
        display: none !important; }

    .d-inline {
        display: inline !important; }

    .d-inline-block {
        display: inline-block !important; }

    .d-block {
        display: block !important; }

    .d-table {
        display: table !important; }

    .d-table-row {
        display: table-row !important; }

    .d-table-cell {
        display: table-cell !important; }

    .d-flex {
        display: -webkit-box !important;
        display: -ms-flexbox !important;
        display: flex !important; }

    .d-inline-flex {
        display: -webkit-inline-box !important;
        display: -ms-inline-flexbox !important;
        display: inline-flex !important; }

    @media (min-width: 576px) {
        .d-sm-none {
            display: none !important; }
        .d-sm-inline {
            display: inline !important; }
        .d-sm-inline-block {
            display: inline-block !important; }
        .d-sm-block {
            display: block !important; }
        .d-sm-table {
            display: table !important; }
        .d-sm-table-row {
            display: table-row !important; }
        .d-sm-table-cell {
            display: table-cell !important; }
        .d-sm-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-sm-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

    @media (min-width: 768px) {
        .d-md-none {
            display: none !important; }
        .d-md-inline {
            display: inline !important; }
        .d-md-inline-block {
            display: inline-block !important; }
        .d-md-block {
            display: block !important; }
        .d-md-table {
            display: table !important; }
        .d-md-table-row {
            display: table-row !important; }
        .d-md-table-cell {
            display: table-cell !important; }
        .d-md-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-md-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

    @media (min-width: 992px) {
        .d-lg-none {
            display: none !important; }
        .d-lg-inline {
            display: inline !important; }
        .d-lg-inline-block {
            display: inline-block !important; }
        .d-lg-block {
            display: block !important; }
        .d-lg-table {
            display: table !important; }
        .d-lg-table-row {
            display: table-row !important; }
        .d-lg-table-cell {
            display: table-cell !important; }
        .d-lg-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-lg-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

    @media (min-width: 1200px) {
        .d-xl-none {
            display: none !important; }
        .d-xl-inline {
            display: inline !important; }
        .d-xl-inline-block {
            display: inline-block !important; }
        .d-xl-block {
            display: block !important; }
        .d-xl-table {
            display: table !important; }
        .d-xl-table-row {
            display: table-row !important; }
        .d-xl-table-cell {
            display: table-cell !important; }
        .d-xl-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-xl-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

    @media print {
        .d-print-none {
            display: none !important; }
        .d-print-inline {
            display: inline !important; }
        .d-print-inline-block {
            display: inline-block !important; }
        .d-print-block {
            display: block !important; }
        .d-print-table {
            display: table !important; }
        .d-print-table-row {
            display: table-row !important; }
        .d-print-table-cell {
            display: table-cell !important; }
        .d-print-flex {
            display: -webkit-box !important;
            display: -ms-flexbox !important;
            display: flex !important; }
        .d-print-inline-flex {
            display: -webkit-inline-box !important;
            display: -ms-inline-flexbox !important;
            display: inline-flex !important; } }

    .embed-responsive {
        position: relative;
        display: block;
        width: 100%;
        padding: 0;
        overflow: hidden; }
    .embed-responsive::before {
        display: block;
        content: ""; }
    .embed-responsive .embed-responsive-item,
    .embed-responsive iframe,
    .embed-responsive embed,
    .embed-responsive object,
    .embed-responsive video {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: 0; }

    .embed-responsive-21by9::before {
        padding-top: 42.85714%; }

    .embed-responsive-16by9::before {
        padding-top: 56.25%; }

    .embed-responsive-4by3::before {
        padding-top: 75%; }

    .embed-responsive-1by1::before {
        padding-top: 100%; }

    .flex-row {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: row !important;
        flex-direction: row !important; }

    .flex-column {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: normal !important;
        -ms-flex-direction: column !important;
        flex-direction: column !important; }

    .flex-row-reverse {
        -webkit-box-orient: horizontal !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: row-reverse !important;
        flex-direction: row-reverse !important; }

    .flex-column-reverse {
        -webkit-box-orient: vertical !important;
        -webkit-box-direction: reverse !important;
        -ms-flex-direction: column-reverse !important;
        flex-direction: column-reverse !important; }

    .flex-wrap {
        -ms-flex-wrap: wrap !important;
        flex-wrap: wrap !important; }

    .flex-nowrap {
        -ms-flex-wrap: nowrap !important;
        flex-wrap: nowrap !important; }

    .flex-wrap-reverse {
        -ms-flex-wrap: wrap-reverse !important;
        flex-wrap: wrap-reverse !important; }

    .flex-fill {
        -webkit-box-flex: 1 !important;
        -ms-flex: 1 1 auto !important;
        flex: 1 1 auto !important; }

    .flex-grow-0 {
        -webkit-box-flex: 0 !important;
        -ms-flex-positive: 0 !important;
        flex-grow: 0 !important; }

    .flex-grow-1 {
        -webkit-box-flex: 1 !important;
        -ms-flex-positive: 1 !important;
        flex-grow: 1 !important; }

    .flex-shrink-0 {
        -ms-flex-negative: 0 !important;
        flex-shrink: 0 !important; }

    .flex-shrink-1 {
        -ms-flex-negative: 1 !important;
        flex-shrink: 1 !important; }

    .justify-content-start {
        -webkit-box-pack: start !important;
        -ms-flex-pack: start !important;
        justify-content: flex-start !important; }

    .justify-content-end {
        -webkit-box-pack: end !important;
        -ms-flex-pack: end !important;
        justify-content: flex-end !important; }

    .justify-content-center {
        -webkit-box-pack: center !important;
        -ms-flex-pack: center !important;
        justify-content: center !important; }

    .justify-content-between {
        -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
        justify-content: space-between !important; }

    .justify-content-around {
        -ms-flex-pack: distribute !important;
        justify-content: space-around !important; }

    .align-items-start {
        -webkit-box-align: start !important;
        -ms-flex-align: start !important;
        align-items: flex-start !important; }

    .align-items-end {
        -webkit-box-align: end !important;
        -ms-flex-align: end !important;
        align-items: flex-end !important; }

    .align-items-center {
        -webkit-box-align: center !important;
        -ms-flex-align: center !important;
        align-items: center !important; }

    .align-items-baseline {
        -webkit-box-align: baseline !important;
        -ms-flex-align: baseline !important;
        align-items: baseline !important; }

    .align-items-stretch {
        -webkit-box-align: stretch !important;
        -ms-flex-align: stretch !important;
        align-items: stretch !important; }

    .align-content-start {
        -ms-flex-line-pack: start !important;
        align-content: flex-start !important; }

    .align-content-end {
        -ms-flex-line-pack: end !important;
        align-content: flex-end !important; }

    .align-content-center {
        -ms-flex-line-pack: center !important;
        align-content: center !important; }

    .align-content-between {
        -ms-flex-line-pack: justify !important;
        align-content: space-between !important; }

    .align-content-around {
        -ms-flex-line-pack: distribute !important;
        align-content: space-around !important; }

    .align-content-stretch {
        -ms-flex-line-pack: stretch !important;
        align-content: stretch !important; }

    .align-self-auto {
        -ms-flex-item-align: auto !important;
        -ms-grid-row-align: auto !important;
        align-self: auto !important; }

    .align-self-start {
        -ms-flex-item-align: start !important;
        align-self: flex-start !important; }

    .align-self-end {
        -ms-flex-item-align: end !important;
        align-self: flex-end !important; }

    .align-self-center {
        -ms-flex-item-align: center !important;
        -ms-grid-row-align: center !important;
        align-self: center !important; }

    .align-self-baseline {
        -ms-flex-item-align: baseline !important;
        align-self: baseline !important; }

    .align-self-stretch {
        -ms-flex-item-align: stretch !important;
        -ms-grid-row-align: stretch !important;
        align-self: stretch !important; }

    @media (min-width: 576px) {
        .flex-sm-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-sm-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-sm-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-sm-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-sm-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-sm-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-sm-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-sm-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-sm-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-sm-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-sm-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-sm-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-sm-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-sm-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-sm-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-sm-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-sm-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-sm-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-sm-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-sm-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-sm-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-sm-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-sm-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-sm-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-sm-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-sm-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-sm-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-sm-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-sm-auto {
            -ms-flex-item-align: auto !important;
            -ms-grid-row-align: auto !important;
            align-self: auto !important; }
        .align-self-sm-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-sm-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-sm-center {
            -ms-flex-item-align: center !important;
            -ms-grid-row-align: center !important;
            align-self: center !important; }
        .align-self-sm-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-sm-stretch {
            -ms-flex-item-align: stretch !important;
            -ms-grid-row-align: stretch !important;
            align-self: stretch !important; } }

    @media (min-width: 768px) {
        .flex-md-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-md-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-md-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-md-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-md-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-md-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-md-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-md-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-md-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-md-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-md-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-md-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-md-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-md-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-md-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-md-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-md-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-md-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-md-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-md-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-md-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-md-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-md-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-md-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-md-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-md-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-md-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-md-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-md-auto {
            -ms-flex-item-align: auto !important;
            -ms-grid-row-align: auto !important;
            align-self: auto !important; }
        .align-self-md-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-md-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-md-center {
            -ms-flex-item-align: center !important;
            -ms-grid-row-align: center !important;
            align-self: center !important; }
        .align-self-md-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-md-stretch {
            -ms-flex-item-align: stretch !important;
            -ms-grid-row-align: stretch !important;
            align-self: stretch !important; } }

    @media (min-width: 992px) {
        .flex-lg-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-lg-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-lg-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-lg-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-lg-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-lg-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-lg-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-lg-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-lg-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-lg-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-lg-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-lg-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-lg-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-lg-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-lg-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-lg-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-lg-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-lg-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-lg-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-lg-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-lg-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-lg-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-lg-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-lg-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-lg-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-lg-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-lg-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-lg-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-lg-auto {
            -ms-flex-item-align: auto !important;
            -ms-grid-row-align: auto !important;
            align-self: auto !important; }
        .align-self-lg-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-lg-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-lg-center {
            -ms-flex-item-align: center !important;
            -ms-grid-row-align: center !important;
            align-self: center !important; }
        .align-self-lg-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-lg-stretch {
            -ms-flex-item-align: stretch !important;
            -ms-grid-row-align: stretch !important;
            align-self: stretch !important; } }

    @media (min-width: 1200px) {
        .flex-xl-row {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: row !important;
            flex-direction: row !important; }
        .flex-xl-column {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: normal !important;
            -ms-flex-direction: column !important;
            flex-direction: column !important; }
        .flex-xl-row-reverse {
            -webkit-box-orient: horizontal !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: row-reverse !important;
            flex-direction: row-reverse !important; }
        .flex-xl-column-reverse {
            -webkit-box-orient: vertical !important;
            -webkit-box-direction: reverse !important;
            -ms-flex-direction: column-reverse !important;
            flex-direction: column-reverse !important; }
        .flex-xl-wrap {
            -ms-flex-wrap: wrap !important;
            flex-wrap: wrap !important; }
        .flex-xl-nowrap {
            -ms-flex-wrap: nowrap !important;
            flex-wrap: nowrap !important; }
        .flex-xl-wrap-reverse {
            -ms-flex-wrap: wrap-reverse !important;
            flex-wrap: wrap-reverse !important; }
        .flex-xl-fill {
            -webkit-box-flex: 1 !important;
            -ms-flex: 1 1 auto !important;
            flex: 1 1 auto !important; }
        .flex-xl-grow-0 {
            -webkit-box-flex: 0 !important;
            -ms-flex-positive: 0 !important;
            flex-grow: 0 !important; }
        .flex-xl-grow-1 {
            -webkit-box-flex: 1 !important;
            -ms-flex-positive: 1 !important;
            flex-grow: 1 !important; }
        .flex-xl-shrink-0 {
            -ms-flex-negative: 0 !important;
            flex-shrink: 0 !important; }
        .flex-xl-shrink-1 {
            -ms-flex-negative: 1 !important;
            flex-shrink: 1 !important; }
        .justify-content-xl-start {
            -webkit-box-pack: start !important;
            -ms-flex-pack: start !important;
            justify-content: flex-start !important; }
        .justify-content-xl-end {
            -webkit-box-pack: end !important;
            -ms-flex-pack: end !important;
            justify-content: flex-end !important; }
        .justify-content-xl-center {
            -webkit-box-pack: center !important;
            -ms-flex-pack: center !important;
            justify-content: center !important; }
        .justify-content-xl-between {
            -webkit-box-pack: justify !important;
            -ms-flex-pack: justify !important;
            justify-content: space-between !important; }
        .justify-content-xl-around {
            -ms-flex-pack: distribute !important;
            justify-content: space-around !important; }
        .align-items-xl-start {
            -webkit-box-align: start !important;
            -ms-flex-align: start !important;
            align-items: flex-start !important; }
        .align-items-xl-end {
            -webkit-box-align: end !important;
            -ms-flex-align: end !important;
            align-items: flex-end !important; }
        .align-items-xl-center {
            -webkit-box-align: center !important;
            -ms-flex-align: center !important;
            align-items: center !important; }
        .align-items-xl-baseline {
            -webkit-box-align: baseline !important;
            -ms-flex-align: baseline !important;
            align-items: baseline !important; }
        .align-items-xl-stretch {
            -webkit-box-align: stretch !important;
            -ms-flex-align: stretch !important;
            align-items: stretch !important; }
        .align-content-xl-start {
            -ms-flex-line-pack: start !important;
            align-content: flex-start !important; }
        .align-content-xl-end {
            -ms-flex-line-pack: end !important;
            align-content: flex-end !important; }
        .align-content-xl-center {
            -ms-flex-line-pack: center !important;
            align-content: center !important; }
        .align-content-xl-between {
            -ms-flex-line-pack: justify !important;
            align-content: space-between !important; }
        .align-content-xl-around {
            -ms-flex-line-pack: distribute !important;
            align-content: space-around !important; }
        .align-content-xl-stretch {
            -ms-flex-line-pack: stretch !important;
            align-content: stretch !important; }
        .align-self-xl-auto {
            -ms-flex-item-align: auto !important;
            -ms-grid-row-align: auto !important;
            align-self: auto !important; }
        .align-self-xl-start {
            -ms-flex-item-align: start !important;
            align-self: flex-start !important; }
        .align-self-xl-end {
            -ms-flex-item-align: end !important;
            align-self: flex-end !important; }
        .align-self-xl-center {
            -ms-flex-item-align: center !important;
            -ms-grid-row-align: center !important;
            align-self: center !important; }
        .align-self-xl-baseline {
            -ms-flex-item-align: baseline !important;
            align-self: baseline !important; }
        .align-self-xl-stretch {
            -ms-flex-item-align: stretch !important;
            -ms-grid-row-align: stretch !important;
            align-self: stretch !important; } }

    .float-left {
        float: left !important; }

    .float-right {
        float: right !important; }

    .float-none {
        float: none !important; }

    @media (min-width: 576px) {
        .float-sm-left {
            float: left !important; }
        .float-sm-right {
            float: right !important; }
        .float-sm-none {
            float: none !important; } }

    @media (min-width: 768px) {
        .float-md-left {
            float: left !important; }
        .float-md-right {
            float: right !important; }
        .float-md-none {
            float: none !important; } }

    @media (min-width: 992px) {
        .float-lg-left {
            float: left !important; }
        .float-lg-right {
            float: right !important; }
        .float-lg-none {
            float: none !important; } }

    @media (min-width: 1200px) {
        .float-xl-left {
            float: left !important; }
        .float-xl-right {
            float: right !important; }
        .float-xl-none {
            float: none !important; } }

    .overflow-auto {
        overflow: auto !important; }

    .overflow-hidden {
        overflow: hidden !important; }

    .position-static {
        position: static !important; }

    .position-relative {
        position: relative !important; }

    .position-absolute {
        position: absolute !important; }

    .position-fixed {
        position: fixed !important; }

    .position-sticky {
        position: -webkit-sticky !important;
        position: sticky !important; }

    .fixed-top {
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1030; }

    .fixed-bottom {
        position: fixed;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1030; }

    @supports ((position: -webkit-sticky) or (position: sticky)) {
        .sticky-top {
            position: -webkit-sticky;
            position: sticky;
            top: 0;
            z-index: 1020; } }

    .sr-only {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0; }

    .sr-only-focusable:active, .sr-only-focusable:focus {
        position: static;
        width: auto;
        height: auto;
        overflow: visible;
        clip: auto;
        white-space: normal; }

    .shadow-sm {
        -webkit-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075) !important; }

    .shadow {
        -webkit-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15) !important; }

    .shadow-lg {
        -webkit-box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important;
        box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.175) !important; }

    .shadow-none {
        -webkit-box-shadow: none !important;
        box-shadow: none !important; }

    .w-25 {
        width: 25% !important; }

    .w-50 {
        width: 50% !important; }

    .w-75 {
        width: 75% !important; }

    .w-100 {
        width: 100% !important; }

    .w-auto {
        width: auto !important; }

    .h-25 {
        height: 25% !important; }

    .h-50 {
        height: 50% !important; }

    .h-75 {
        height: 75% !important; }

    .h-100 {
        height: 100% !important; }

    .h-auto {
        height: auto !important; }

    .mw-100 {
        max-width: 100% !important; }

    .mh-100 {
        max-height: 100% !important; }

    .min-vw-100 {
        min-width: 100vw !important; }

    .min-vh-100 {
        min-height: 100vh !important; }

    .vw-100 {
        width: 100vw !important; }

    .vh-100 {
        height: 100vh !important; }

    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        pointer-events: auto;
        content: "";
        background-color: rgba(0, 0, 0, 0); }

    .m-0 {
        margin: 0 !important; }

    .mt-0,
    .my-0 {
        margin-top: 0 !important; }

    .mr-0,
    .mx-0 {
        margin-right: 0 !important; }

    .mb-0,
    .my-0 {
        margin-bottom: 0 !important; }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important; }

    .m-1 {
        margin: 0.25rem !important; }

    .mt-1,
    .my-1 {
        margin-top: 0.25rem !important; }

    .mr-1,
    .mx-1 {
        margin-right: 0.25rem !important; }

    .mb-1,
    .my-1 {
        margin-bottom: 0.25rem !important; }

    .ml-1,
    .mx-1 {
        margin-left: 0.25rem !important; }

    .m-2 {
        margin: 0.5rem !important; }

    .mt-2,
    .my-2 {
        margin-top: 0.5rem !important; }

    .mr-2,
    .mx-2 {
        margin-right: 0.5rem !important; }

    .mb-2,
    .my-2 {
        margin-bottom: 0.5rem !important; }

    .ml-2,
    .mx-2 {
        margin-left: 0.5rem !important; }

    .m-3 {
        margin: 1rem !important; }

    .mt-3,
    .my-3 {
        margin-top: 1rem !important; }

    .mr-3,
    .mx-3 {
        margin-right: 1rem !important; }

    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important; }

    .ml-3,
    .mx-3 {
        margin-left: 1rem !important; }

    .m-4 {
        margin: 1.5rem !important; }

    .mt-4,
    .my-4 {
        margin-top: 1.5rem !important; }

    .mr-4,
    .mx-4 {
        margin-right: 1.5rem !important; }

    .mb-4,
    .my-4 {
        margin-bottom: 1.5rem !important; }

    .ml-4,
    .mx-4 {
        margin-left: 1.5rem !important; }

    .m-5 {
        margin: 3rem !important; }

    .mt-5,
    .my-5 {
        margin-top: 3rem !important; }

    .mr-5,
    .mx-5 {
        margin-right: 3rem !important; }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important; }

    .ml-5,
    .mx-5 {
        margin-left: 3rem !important; }

    .p-0 {
        padding: 0 !important; }

    .pt-0,
    .py-0 {
        padding-top: 0 !important; }

    .pr-0,
    .px-0 {
        padding-right: 0 !important; }

    .pb-0,
    .py-0 {
        padding-bottom: 0 !important; }

    .pl-0,
    .px-0 {
        padding-left: 0 !important; }

    .p-1 {
        padding: 0.25rem !important; }

    .pt-1,
    .py-1 {
        padding-top: 0.25rem !important; }

    .pr-1,
    .px-1 {
        padding-right: 0.25rem !important; }

    .pb-1,
    .py-1 {
        padding-bottom: 0.25rem !important; }

    .pl-1,
    .px-1 {
        padding-left: 0.25rem !important; }

    .p-2 {
        padding: 0.5rem !important; }

    .pt-2,
    .py-2 {
        padding-top: 0.5rem !important; }

    .pr-2,
    .px-2 {
        padding-right: 0.5rem !important; }

    .pb-2,
    .py-2 {
        padding-bottom: 0.5rem !important; }

    .pl-2,
    .px-2 {
        padding-left: 0.5rem !important; }

    .p-3 {
        padding: 1rem !important; }

    .pt-3,
    .py-3 {
        padding-top: 1rem !important; }

    .pr-3,
    .px-3 {
        padding-right: 1rem !important; }

    .pb-3,
    .py-3 {
        padding-bottom: 1rem !important; }

    .pl-3,
    .px-3 {
        padding-left: 1rem !important; }

    .p-4 {
        padding: 1.5rem !important; }

    .pt-4,
    .py-4 {
        padding-top: 1.5rem !important; }

    .pr-4,
    .px-4 {
        padding-right: 1.5rem !important; }

    .pb-4,
    .py-4 {
        padding-bottom: 1.5rem !important; }

    .pl-4,
    .px-4 {
        padding-left: 1.5rem !important; }

    .p-5 {
        padding: 3rem !important; }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important; }

    .pr-5,
    .px-5 {
        padding-right: 3rem !important; }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important; }

    .pl-5,
    .px-5 {
        padding-left: 3rem !important; }

    .m-n1 {
        margin: -0.25rem !important; }

    .mt-n1,
    .my-n1 {
        margin-top: -0.25rem !important; }

    .mr-n1,
    .mx-n1 {
        margin-right: -0.25rem !important; }

    .mb-n1,
    .my-n1 {
        margin-bottom: -0.25rem !important; }

    .ml-n1,
    .mx-n1 {
        margin-left: -0.25rem !important; }

    .m-n2 {
        margin: -0.5rem !important; }

    .mt-n2,
    .my-n2 {
        margin-top: -0.5rem !important; }

    .mr-n2,
    .mx-n2 {
        margin-right: -0.5rem !important; }

    .mb-n2,
    .my-n2 {
        margin-bottom: -0.5rem !important; }

    .ml-n2,
    .mx-n2 {
        margin-left: -0.5rem !important; }

    .m-n3 {
        margin: -1rem !important; }

    .mt-n3,
    .my-n3 {
        margin-top: -1rem !important; }

    .mr-n3,
    .mx-n3 {
        margin-right: -1rem !important; }

    .mb-n3,
    .my-n3 {
        margin-bottom: -1rem !important; }

    .ml-n3,
    .mx-n3 {
        margin-left: -1rem !important; }

    .m-n4 {
        margin: -1.5rem !important; }

    .mt-n4,
    .my-n4 {
        margin-top: -1.5rem !important; }

    .mr-n4,
    .mx-n4 {
        margin-right: -1.5rem !important; }

    .mb-n4,
    .my-n4 {
        margin-bottom: -1.5rem !important; }

    .ml-n4,
    .mx-n4 {
        margin-left: -1.5rem !important; }

    .m-n5 {
        margin: -3rem !important; }

    .mt-n5,
    .my-n5 {
        margin-top: -3rem !important; }

    .mr-n5,
    .mx-n5 {
        margin-right: -3rem !important; }

    .mb-n5,
    .my-n5 {
        margin-bottom: -3rem !important; }

    .ml-n5,
    .mx-n5 {
        margin-left: -3rem !important; }

    .m-auto {
        margin: auto !important; }

    .mt-auto,
    .my-auto {
        margin-top: auto !important; }

    .mr-auto,
    .mx-auto {
        margin-right: auto !important; }

    .mb-auto,
    .my-auto {
        margin-bottom: auto !important; }

    .ml-auto,
    .mx-auto {
        margin-left: auto !important; }

    @media (min-width: 576px) {
        .m-sm-0 {
            margin: 0 !important; }
        .mt-sm-0,
        .my-sm-0 {
            margin-top: 0 !important; }
        .mr-sm-0,
        .mx-sm-0 {
            margin-right: 0 !important; }
        .mb-sm-0,
        .my-sm-0 {
            margin-bottom: 0 !important; }
        .ml-sm-0,
        .mx-sm-0 {
            margin-left: 0 !important; }
        .m-sm-1 {
            margin: 0.25rem !important; }
        .mt-sm-1,
        .my-sm-1 {
            margin-top: 0.25rem !important; }
        .mr-sm-1,
        .mx-sm-1 {
            margin-right: 0.25rem !important; }
        .mb-sm-1,
        .my-sm-1 {
            margin-bottom: 0.25rem !important; }
        .ml-sm-1,
        .mx-sm-1 {
            margin-left: 0.25rem !important; }
        .m-sm-2 {
            margin: 0.5rem !important; }
        .mt-sm-2,
        .my-sm-2 {
            margin-top: 0.5rem !important; }
        .mr-sm-2,
        .mx-sm-2 {
            margin-right: 0.5rem !important; }
        .mb-sm-2,
        .my-sm-2 {
            margin-bottom: 0.5rem !important; }
        .ml-sm-2,
        .mx-sm-2 {
            margin-left: 0.5rem !important; }
        .m-sm-3 {
            margin: 1rem !important; }
        .mt-sm-3,
        .my-sm-3 {
            margin-top: 1rem !important; }
        .mr-sm-3,
        .mx-sm-3 {
            margin-right: 1rem !important; }
        .mb-sm-3,
        .my-sm-3 {
            margin-bottom: 1rem !important; }
        .ml-sm-3,
        .mx-sm-3 {
            margin-left: 1rem !important; }
        .m-sm-4 {
            margin: 1.5rem !important; }
        .mt-sm-4,
        .my-sm-4 {
            margin-top: 1.5rem !important; }
        .mr-sm-4,
        .mx-sm-4 {
            margin-right: 1.5rem !important; }
        .mb-sm-4,
        .my-sm-4 {
            margin-bottom: 1.5rem !important; }
        .ml-sm-4,
        .mx-sm-4 {
            margin-left: 1.5rem !important; }
        .m-sm-5 {
            margin: 3rem !important; }
        .mt-sm-5,
        .my-sm-5 {
            margin-top: 3rem !important; }
        .mr-sm-5,
        .mx-sm-5 {
            margin-right: 3rem !important; }
        .mb-sm-5,
        .my-sm-5 {
            margin-bottom: 3rem !important; }
        .ml-sm-5,
        .mx-sm-5 {
            margin-left: 3rem !important; }
        .p-sm-0 {
            padding: 0 !important; }
        .pt-sm-0,
        .py-sm-0 {
            padding-top: 0 !important; }
        .pr-sm-0,
        .px-sm-0 {
            padding-right: 0 !important; }
        .pb-sm-0,
        .py-sm-0 {
            padding-bottom: 0 !important; }
        .pl-sm-0,
        .px-sm-0 {
            padding-left: 0 !important; }
        .p-sm-1 {
            padding: 0.25rem !important; }
        .pt-sm-1,
        .py-sm-1 {
            padding-top: 0.25rem !important; }
        .pr-sm-1,
        .px-sm-1 {
            padding-right: 0.25rem !important; }
        .pb-sm-1,
        .py-sm-1 {
            padding-bottom: 0.25rem !important; }
        .pl-sm-1,
        .px-sm-1 {
            padding-left: 0.25rem !important; }
        .p-sm-2 {
            padding: 0.5rem !important; }
        .pt-sm-2,
        .py-sm-2 {
            padding-top: 0.5rem !important; }
        .pr-sm-2,
        .px-sm-2 {
            padding-right: 0.5rem !important; }
        .pb-sm-2,
        .py-sm-2 {
            padding-bottom: 0.5rem !important; }
        .pl-sm-2,
        .px-sm-2 {
            padding-left: 0.5rem !important; }
        .p-sm-3 {
            padding: 1rem !important; }
        .pt-sm-3,
        .py-sm-3 {
            padding-top: 1rem !important; }
        .pr-sm-3,
        .px-sm-3 {
            padding-right: 1rem !important; }
        .pb-sm-3,
        .py-sm-3 {
            padding-bottom: 1rem !important; }
        .pl-sm-3,
        .px-sm-3 {
            padding-left: 1rem !important; }
        .p-sm-4 {
            padding: 1.5rem !important; }
        .pt-sm-4,
        .py-sm-4 {
            padding-top: 1.5rem !important; }
        .pr-sm-4,
        .px-sm-4 {
            padding-right: 1.5rem !important; }
        .pb-sm-4,
        .py-sm-4 {
            padding-bottom: 1.5rem !important; }
        .pl-sm-4,
        .px-sm-4 {
            padding-left: 1.5rem !important; }
        .p-sm-5 {
            padding: 3rem !important; }
        .pt-sm-5,
        .py-sm-5 {
            padding-top: 3rem !important; }
        .pr-sm-5,
        .px-sm-5 {
            padding-right: 3rem !important; }
        .pb-sm-5,
        .py-sm-5 {
            padding-bottom: 3rem !important; }
        .pl-sm-5,
        .px-sm-5 {
            padding-left: 3rem !important; }
        .m-sm-n1 {
            margin: -0.25rem !important; }
        .mt-sm-n1,
        .my-sm-n1 {
            margin-top: -0.25rem !important; }
        .mr-sm-n1,
        .mx-sm-n1 {
            margin-right: -0.25rem !important; }
        .mb-sm-n1,
        .my-sm-n1 {
            margin-bottom: -0.25rem !important; }
        .ml-sm-n1,
        .mx-sm-n1 {
            margin-left: -0.25rem !important; }
        .m-sm-n2 {
            margin: -0.5rem !important; }
        .mt-sm-n2,
        .my-sm-n2 {
            margin-top: -0.5rem !important; }
        .mr-sm-n2,
        .mx-sm-n2 {
            margin-right: -0.5rem !important; }
        .mb-sm-n2,
        .my-sm-n2 {
            margin-bottom: -0.5rem !important; }
        .ml-sm-n2,
        .mx-sm-n2 {
            margin-left: -0.5rem !important; }
        .m-sm-n3 {
            margin: -1rem !important; }
        .mt-sm-n3,
        .my-sm-n3 {
            margin-top: -1rem !important; }
        .mr-sm-n3,
        .mx-sm-n3 {
            margin-right: -1rem !important; }
        .mb-sm-n3,
        .my-sm-n3 {
            margin-bottom: -1rem !important; }
        .ml-sm-n3,
        .mx-sm-n3 {
            margin-left: -1rem !important; }
        .m-sm-n4 {
            margin: -1.5rem !important; }
        .mt-sm-n4,
        .my-sm-n4 {
            margin-top: -1.5rem !important; }
        .mr-sm-n4,
        .mx-sm-n4 {
            margin-right: -1.5rem !important; }
        .mb-sm-n4,
        .my-sm-n4 {
            margin-bottom: -1.5rem !important; }
        .ml-sm-n4,
        .mx-sm-n4 {
            margin-left: -1.5rem !important; }
        .m-sm-n5 {
            margin: -3rem !important; }
        .mt-sm-n5,
        .my-sm-n5 {
            margin-top: -3rem !important; }
        .mr-sm-n5,
        .mx-sm-n5 {
            margin-right: -3rem !important; }
        .mb-sm-n5,
        .my-sm-n5 {
            margin-bottom: -3rem !important; }
        .ml-sm-n5,
        .mx-sm-n5 {
            margin-left: -3rem !important; }
        .m-sm-auto {
            margin: auto !important; }
        .mt-sm-auto,
        .my-sm-auto {
            margin-top: auto !important; }
        .mr-sm-auto,
        .mx-sm-auto {
            margin-right: auto !important; }
        .mb-sm-auto,
        .my-sm-auto {
            margin-bottom: auto !important; }
        .ml-sm-auto,
        .mx-sm-auto {
            margin-left: auto !important; } }

    @media (min-width: 768px) {
        .m-md-0 {
            margin: 0 !important; }
        .mt-md-0,
        .my-md-0 {
            margin-top: 0 !important; }
        .mr-md-0,
        .mx-md-0 {
            margin-right: 0 !important; }
        .mb-md-0,
        .my-md-0 {
            margin-bottom: 0 !important; }
        .ml-md-0,
        .mx-md-0 {
            margin-left: 0 !important; }
        .m-md-1 {
            margin: 0.25rem !important; }
        .mt-md-1,
        .my-md-1 {
            margin-top: 0.25rem !important; }
        .mr-md-1,
        .mx-md-1 {
            margin-right: 0.25rem !important; }
        .mb-md-1,
        .my-md-1 {
            margin-bottom: 0.25rem !important; }
        .ml-md-1,
        .mx-md-1 {
            margin-left: 0.25rem !important; }
        .m-md-2 {
            margin: 0.5rem !important; }
        .mt-md-2,
        .my-md-2 {
            margin-top: 0.5rem !important; }
        .mr-md-2,
        .mx-md-2 {
            margin-right: 0.5rem !important; }
        .mb-md-2,
        .my-md-2 {
            margin-bottom: 0.5rem !important; }
        .ml-md-2,
        .mx-md-2 {
            margin-left: 0.5rem !important; }
        .m-md-3 {
            margin: 1rem !important; }
        .mt-md-3,
        .my-md-3 {
            margin-top: 1rem !important; }
        .mr-md-3,
        .mx-md-3 {
            margin-right: 1rem !important; }
        .mb-md-3,
        .my-md-3 {
            margin-bottom: 1rem !important; }
        .ml-md-3,
        .mx-md-3 {
            margin-left: 1rem !important; }
        .m-md-4 {
            margin: 1.5rem !important; }
        .mt-md-4,
        .my-md-4 {
            margin-top: 1.5rem !important; }
        .mr-md-4,
        .mx-md-4 {
            margin-right: 1.5rem !important; }
        .mb-md-4,
        .my-md-4 {
            margin-bottom: 1.5rem !important; }
        .ml-md-4,
        .mx-md-4 {
            margin-left: 1.5rem !important; }
        .m-md-5 {
            margin: 3rem !important; }
        .mt-md-5,
        .my-md-5 {
            margin-top: 3rem !important; }
        .mr-md-5,
        .mx-md-5 {
            margin-right: 3rem !important; }
        .mb-md-5,
        .my-md-5 {
            margin-bottom: 3rem !important; }
        .ml-md-5,
        .mx-md-5 {
            margin-left: 3rem !important; }
        .p-md-0 {
            padding: 0 !important; }
        .pt-md-0,
        .py-md-0 {
            padding-top: 0 !important; }
        .pr-md-0,
        .px-md-0 {
            padding-right: 0 !important; }
        .pb-md-0,
        .py-md-0 {
            padding-bottom: 0 !important; }
        .pl-md-0,
        .px-md-0 {
            padding-left: 0 !important; }
        .p-md-1 {
            padding: 0.25rem !important; }
        .pt-md-1,
        .py-md-1 {
            padding-top: 0.25rem !important; }
        .pr-md-1,
        .px-md-1 {
            padding-right: 0.25rem !important; }
        .pb-md-1,
        .py-md-1 {
            padding-bottom: 0.25rem !important; }
        .pl-md-1,
        .px-md-1 {
            padding-left: 0.25rem !important; }
        .p-md-2 {
            padding: 0.5rem !important; }
        .pt-md-2,
        .py-md-2 {
            padding-top: 0.5rem !important; }
        .pr-md-2,
        .px-md-2 {
            padding-right: 0.5rem !important; }
        .pb-md-2,
        .py-md-2 {
            padding-bottom: 0.5rem !important; }
        .pl-md-2,
        .px-md-2 {
            padding-left: 0.5rem !important; }
        .p-md-3 {
            padding: 1rem !important; }
        .pt-md-3,
        .py-md-3 {
            padding-top: 1rem !important; }
        .pr-md-3,
        .px-md-3 {
            padding-right: 1rem !important; }
        .pb-md-3,
        .py-md-3 {
            padding-bottom: 1rem !important; }
        .pl-md-3,
        .px-md-3 {
            padding-left: 1rem !important; }
        .p-md-4 {
            padding: 1.5rem !important; }
        .pt-md-4,
        .py-md-4 {
            padding-top: 1.5rem !important; }
        .pr-md-4,
        .px-md-4 {
            padding-right: 1.5rem !important; }
        .pb-md-4,
        .py-md-4 {
            padding-bottom: 1.5rem !important; }
        .pl-md-4,
        .px-md-4 {
            padding-left: 1.5rem !important; }
        .p-md-5 {
            padding: 3rem !important; }
        .pt-md-5,
        .py-md-5 {
            padding-top: 3rem !important; }
        .pr-md-5,
        .px-md-5 {
            padding-right: 3rem !important; }
        .pb-md-5,
        .py-md-5 {
            padding-bottom: 3rem !important; }
        .pl-md-5,
        .px-md-5 {
            padding-left: 3rem !important; }
        .m-md-n1 {
            margin: -0.25rem !important; }
        .mt-md-n1,
        .my-md-n1 {
            margin-top: -0.25rem !important; }
        .mr-md-n1,
        .mx-md-n1 {
            margin-right: -0.25rem !important; }
        .mb-md-n1,
        .my-md-n1 {
            margin-bottom: -0.25rem !important; }
        .ml-md-n1,
        .mx-md-n1 {
            margin-left: -0.25rem !important; }
        .m-md-n2 {
            margin: -0.5rem !important; }
        .mt-md-n2,
        .my-md-n2 {
            margin-top: -0.5rem !important; }
        .mr-md-n2,
        .mx-md-n2 {
            margin-right: -0.5rem !important; }
        .mb-md-n2,
        .my-md-n2 {
            margin-bottom: -0.5rem !important; }
        .ml-md-n2,
        .mx-md-n2 {
            margin-left: -0.5rem !important; }
        .m-md-n3 {
            margin: -1rem !important; }
        .mt-md-n3,
        .my-md-n3 {
            margin-top: -1rem !important; }
        .mr-md-n3,
        .mx-md-n3 {
            margin-right: -1rem !important; }
        .mb-md-n3,
        .my-md-n3 {
            margin-bottom: -1rem !important; }
        .ml-md-n3,
        .mx-md-n3 {
            margin-left: -1rem !important; }
        .m-md-n4 {
            margin: -1.5rem !important; }
        .mt-md-n4,
        .my-md-n4 {
            margin-top: -1.5rem !important; }
        .mr-md-n4,
        .mx-md-n4 {
            margin-right: -1.5rem !important; }
        .mb-md-n4,
        .my-md-n4 {
            margin-bottom: -1.5rem !important; }
        .ml-md-n4,
        .mx-md-n4 {
            margin-left: -1.5rem !important; }
        .m-md-n5 {
            margin: -3rem !important; }
        .mt-md-n5,
        .my-md-n5 {
            margin-top: -3rem !important; }
        .mr-md-n5,
        .mx-md-n5 {
            margin-right: -3rem !important; }
        .mb-md-n5,
        .my-md-n5 {
            margin-bottom: -3rem !important; }
        .ml-md-n5,
        .mx-md-n5 {
            margin-left: -3rem !important; }
        .m-md-auto {
            margin: auto !important; }
        .mt-md-auto,
        .my-md-auto {
            margin-top: auto !important; }
        .mr-md-auto,
        .mx-md-auto {
            margin-right: auto !important; }
        .mb-md-auto,
        .my-md-auto {
            margin-bottom: auto !important; }
        .ml-md-auto,
        .mx-md-auto {
            margin-left: auto !important; } }

    @media (min-width: 992px) {
        .m-lg-0 {
            margin: 0 !important; }
        .mt-lg-0,
        .my-lg-0 {
            margin-top: 0 !important; }
        .mr-lg-0,
        .mx-lg-0 {
            margin-right: 0 !important; }
        .mb-lg-0,
        .my-lg-0 {
            margin-bottom: 0 !important; }
        .ml-lg-0,
        .mx-lg-0 {
            margin-left: 0 !important; }
        .m-lg-1 {
            margin: 0.25rem !important; }
        .mt-lg-1,
        .my-lg-1 {
            margin-top: 0.25rem !important; }
        .mr-lg-1,
        .mx-lg-1 {
            margin-right: 0.25rem !important; }
        .mb-lg-1,
        .my-lg-1 {
            margin-bottom: 0.25rem !important; }
        .ml-lg-1,
        .mx-lg-1 {
            margin-left: 0.25rem !important; }
        .m-lg-2 {
            margin: 0.5rem !important; }
        .mt-lg-2,
        .my-lg-2 {
            margin-top: 0.5rem !important; }
        .mr-lg-2,
        .mx-lg-2 {
            margin-right: 0.5rem !important; }
        .mb-lg-2,
        .my-lg-2 {
            margin-bottom: 0.5rem !important; }
        .ml-lg-2,
        .mx-lg-2 {
            margin-left: 0.5rem !important; }
        .m-lg-3 {
            margin: 1rem !important; }
        .mt-lg-3,
        .my-lg-3 {
            margin-top: 1rem !important; }
        .mr-lg-3,
        .mx-lg-3 {
            margin-right: 1rem !important; }
        .mb-lg-3,
        .my-lg-3 {
            margin-bottom: 1rem !important; }
        .ml-lg-3,
        .mx-lg-3 {
            margin-left: 1rem !important; }
        .m-lg-4 {
            margin: 1.5rem !important; }
        .mt-lg-4,
        .my-lg-4 {
            margin-top: 1.5rem !important; }
        .mr-lg-4,
        .mx-lg-4 {
            margin-right: 1.5rem !important; }
        .mb-lg-4,
        .my-lg-4 {
            margin-bottom: 1.5rem !important; }
        .ml-lg-4,
        .mx-lg-4 {
            margin-left: 1.5rem !important; }
        .m-lg-5 {
            margin: 3rem !important; }
        .mt-lg-5,
        .my-lg-5 {
            margin-top: 3rem !important; }
        .mr-lg-5,
        .mx-lg-5 {
            margin-right: 3rem !important; }
        .mb-lg-5,
        .my-lg-5 {
            margin-bottom: 3rem !important; }
        .ml-lg-5,
        .mx-lg-5 {
            margin-left: 3rem !important; }
        .p-lg-0 {
            padding: 0 !important; }
        .pt-lg-0,
        .py-lg-0 {
            padding-top: 0 !important; }
        .pr-lg-0,
        .px-lg-0 {
            padding-right: 0 !important; }
        .pb-lg-0,
        .py-lg-0 {
            padding-bottom: 0 !important; }
        .pl-lg-0,
        .px-lg-0 {
            padding-left: 0 !important; }
        .p-lg-1 {
            padding: 0.25rem !important; }
        .pt-lg-1,
        .py-lg-1 {
            padding-top: 0.25rem !important; }
        .pr-lg-1,
        .px-lg-1 {
            padding-right: 0.25rem !important; }
        .pb-lg-1,
        .py-lg-1 {
            padding-bottom: 0.25rem !important; }
        .pl-lg-1,
        .px-lg-1 {
            padding-left: 0.25rem !important; }
        .p-lg-2 {
            padding: 0.5rem !important; }
        .pt-lg-2,
        .py-lg-2 {
            padding-top: 0.5rem !important; }
        .pr-lg-2,
        .px-lg-2 {
            padding-right: 0.5rem !important; }
        .pb-lg-2,
        .py-lg-2 {
            padding-bottom: 0.5rem !important; }
        .pl-lg-2,
        .px-lg-2 {
            padding-left: 0.5rem !important; }
        .p-lg-3 {
            padding: 1rem !important; }
        .pt-lg-3,
        .py-lg-3 {
            padding-top: 1rem !important; }
        .pr-lg-3,
        .px-lg-3 {
            padding-right: 1rem !important; }
        .pb-lg-3,
        .py-lg-3 {
            padding-bottom: 1rem !important; }
        .pl-lg-3,
        .px-lg-3 {
            padding-left: 1rem !important; }
        .p-lg-4 {
            padding: 1.5rem !important; }
        .pt-lg-4,
        .py-lg-4 {
            padding-top: 1.5rem !important; }
        .pr-lg-4,
        .px-lg-4 {
            padding-right: 1.5rem !important; }
        .pb-lg-4,
        .py-lg-4 {
            padding-bottom: 1.5rem !important; }
        .pl-lg-4,
        .px-lg-4 {
            padding-left: 1.5rem !important; }
        .p-lg-5 {
            padding: 3rem !important; }
        .pt-lg-5,
        .py-lg-5 {
            padding-top: 3rem !important; }
        .pr-lg-5,
        .px-lg-5 {
            padding-right: 3rem !important; }
        .pb-lg-5,
        .py-lg-5 {
            padding-bottom: 3rem !important; }
        .pl-lg-5,
        .px-lg-5 {
            padding-left: 3rem !important; }
        .m-lg-n1 {
            margin: -0.25rem !important; }
        .mt-lg-n1,
        .my-lg-n1 {
            margin-top: -0.25rem !important; }
        .mr-lg-n1,
        .mx-lg-n1 {
            margin-right: -0.25rem !important; }
        .mb-lg-n1,
        .my-lg-n1 {
            margin-bottom: -0.25rem !important; }
        .ml-lg-n1,
        .mx-lg-n1 {
            margin-left: -0.25rem !important; }
        .m-lg-n2 {
            margin: -0.5rem !important; }
        .mt-lg-n2,
        .my-lg-n2 {
            margin-top: -0.5rem !important; }
        .mr-lg-n2,
        .mx-lg-n2 {
            margin-right: -0.5rem !important; }
        .mb-lg-n2,
        .my-lg-n2 {
            margin-bottom: -0.5rem !important; }
        .ml-lg-n2,
        .mx-lg-n2 {
            margin-left: -0.5rem !important; }
        .m-lg-n3 {
            margin: -1rem !important; }
        .mt-lg-n3,
        .my-lg-n3 {
            margin-top: -1rem !important; }
        .mr-lg-n3,
        .mx-lg-n3 {
            margin-right: -1rem !important; }
        .mb-lg-n3,
        .my-lg-n3 {
            margin-bottom: -1rem !important; }
        .ml-lg-n3,
        .mx-lg-n3 {
            margin-left: -1rem !important; }
        .m-lg-n4 {
            margin: -1.5rem !important; }
        .mt-lg-n4,
        .my-lg-n4 {
            margin-top: -1.5rem !important; }
        .mr-lg-n4,
        .mx-lg-n4 {
            margin-right: -1.5rem !important; }
        .mb-lg-n4,
        .my-lg-n4 {
            margin-bottom: -1.5rem !important; }
        .ml-lg-n4,
        .mx-lg-n4 {
            margin-left: -1.5rem !important; }
        .m-lg-n5 {
            margin: -3rem !important; }
        .mt-lg-n5,
        .my-lg-n5 {
            margin-top: -3rem !important; }
        .mr-lg-n5,
        .mx-lg-n5 {
            margin-right: -3rem !important; }
        .mb-lg-n5,
        .my-lg-n5 {
            margin-bottom: -3rem !important; }
        .ml-lg-n5,
        .mx-lg-n5 {
            margin-left: -3rem !important; }
        .m-lg-auto {
            margin: auto !important; }
        .mt-lg-auto,
        .my-lg-auto {
            margin-top: auto !important; }
        .mr-lg-auto,
        .mx-lg-auto {
            margin-right: auto !important; }
        .mb-lg-auto,
        .my-lg-auto {
            margin-bottom: auto !important; }
        .ml-lg-auto,
        .mx-lg-auto {
            margin-left: auto !important; } }

    @media (min-width: 1200px) {
        .m-xl-0 {
            margin: 0 !important; }
        .mt-xl-0,
        .my-xl-0 {
            margin-top: 0 !important; }
        .mr-xl-0,
        .mx-xl-0 {
            margin-right: 0 !important; }
        .mb-xl-0,
        .my-xl-0 {
            margin-bottom: 0 !important; }
        .ml-xl-0,
        .mx-xl-0 {
            margin-left: 0 !important; }
        .m-xl-1 {
            margin: 0.25rem !important; }
        .mt-xl-1,
        .my-xl-1 {
            margin-top: 0.25rem !important; }
        .mr-xl-1,
        .mx-xl-1 {
            margin-right: 0.25rem !important; }
        .mb-xl-1,
        .my-xl-1 {
            margin-bottom: 0.25rem !important; }
        .ml-xl-1,
        .mx-xl-1 {
            margin-left: 0.25rem !important; }
        .m-xl-2 {
            margin: 0.5rem !important; }
        .mt-xl-2,
        .my-xl-2 {
            margin-top: 0.5rem !important; }
        .mr-xl-2,
        .mx-xl-2 {
            margin-right: 0.5rem !important; }
        .mb-xl-2,
        .my-xl-2 {
            margin-bottom: 0.5rem !important; }
        .ml-xl-2,
        .mx-xl-2 {
            margin-left: 0.5rem !important; }
        .m-xl-3 {
            margin: 1rem !important; }
        .mt-xl-3,
        .my-xl-3 {
            margin-top: 1rem !important; }
        .mr-xl-3,
        .mx-xl-3 {
            margin-right: 1rem !important; }
        .mb-xl-3,
        .my-xl-3 {
            margin-bottom: 1rem !important; }
        .ml-xl-3,
        .mx-xl-3 {
            margin-left: 1rem !important; }
        .m-xl-4 {
            margin: 1.5rem !important; }
        .mt-xl-4,
        .my-xl-4 {
            margin-top: 1.5rem !important; }
        .mr-xl-4,
        .mx-xl-4 {
            margin-right: 1.5rem !important; }
        .mb-xl-4,
        .my-xl-4 {
            margin-bottom: 1.5rem !important; }
        .ml-xl-4,
        .mx-xl-4 {
            margin-left: 1.5rem !important; }
        .m-xl-5 {
            margin: 3rem !important; }
        .mt-xl-5,
        .my-xl-5 {
            margin-top: 3rem !important; }
        .mr-xl-5,
        .mx-xl-5 {
            margin-right: 3rem !important; }
        .mb-xl-5,
        .my-xl-5 {
            margin-bottom: 3rem !important; }
        .ml-xl-5,
        .mx-xl-5 {
            margin-left: 3rem !important; }
        .p-xl-0 {
            padding: 0 !important; }
        .pt-xl-0,
        .py-xl-0 {
            padding-top: 0 !important; }
        .pr-xl-0,
        .px-xl-0 {
            padding-right: 0 !important; }
        .pb-xl-0,
        .py-xl-0 {
            padding-bottom: 0 !important; }
        .pl-xl-0,
        .px-xl-0 {
            padding-left: 0 !important; }
        .p-xl-1 {
            padding: 0.25rem !important; }
        .pt-xl-1,
        .py-xl-1 {
            padding-top: 0.25rem !important; }
        .pr-xl-1,
        .px-xl-1 {
            padding-right: 0.25rem !important; }
        .pb-xl-1,
        .py-xl-1 {
            padding-bottom: 0.25rem !important; }
        .pl-xl-1,
        .px-xl-1 {
            padding-left: 0.25rem !important; }
        .p-xl-2 {
            padding: 0.5rem !important; }
        .pt-xl-2,
        .py-xl-2 {
            padding-top: 0.5rem !important; }
        .pr-xl-2,
        .px-xl-2 {
            padding-right: 0.5rem !important; }
        .pb-xl-2,
        .py-xl-2 {
            padding-bottom: 0.5rem !important; }
        .pl-xl-2,
        .px-xl-2 {
            padding-left: 0.5rem !important; }
        .p-xl-3 {
            padding: 1rem !important; }
        .pt-xl-3,
        .py-xl-3 {
            padding-top: 1rem !important; }
        .pr-xl-3,
        .px-xl-3 {
            padding-right: 1rem !important; }
        .pb-xl-3,
        .py-xl-3 {
            padding-bottom: 1rem !important; }
        .pl-xl-3,
        .px-xl-3 {
            padding-left: 1rem !important; }
        .p-xl-4 {
            padding: 1.5rem !important; }
        .pt-xl-4,
        .py-xl-4 {
            padding-top: 1.5rem !important; }
        .pr-xl-4,
        .px-xl-4 {
            padding-right: 1.5rem !important; }
        .pb-xl-4,
        .py-xl-4 {
            padding-bottom: 1.5rem !important; }
        .pl-xl-4,
        .px-xl-4 {
            padding-left: 1.5rem !important; }
        .p-xl-5 {
            padding: 3rem !important; }
        .pt-xl-5,
        .py-xl-5 {
            padding-top: 3rem !important; }
        .pr-xl-5,
        .px-xl-5 {
            padding-right: 3rem !important; }
        .pb-xl-5,
        .py-xl-5 {
            padding-bottom: 3rem !important; }
        .pl-xl-5,
        .px-xl-5 {
            padding-left: 3rem !important; }
        .m-xl-n1 {
            margin: -0.25rem !important; }
        .mt-xl-n1,
        .my-xl-n1 {
            margin-top: -0.25rem !important; }
        .mr-xl-n1,
        .mx-xl-n1 {
            margin-right: -0.25rem !important; }
        .mb-xl-n1,
        .my-xl-n1 {
            margin-bottom: -0.25rem !important; }
        .ml-xl-n1,
        .mx-xl-n1 {
            margin-left: -0.25rem !important; }
        .m-xl-n2 {
            margin: -0.5rem !important; }
        .mt-xl-n2,
        .my-xl-n2 {
            margin-top: -0.5rem !important; }
        .mr-xl-n2,
        .mx-xl-n2 {
            margin-right: -0.5rem !important; }
        .mb-xl-n2,
        .my-xl-n2 {
            margin-bottom: -0.5rem !important; }
        .ml-xl-n2,
        .mx-xl-n2 {
            margin-left: -0.5rem !important; }
        .m-xl-n3 {
            margin: -1rem !important; }
        .mt-xl-n3,
        .my-xl-n3 {
            margin-top: -1rem !important; }
        .mr-xl-n3,
        .mx-xl-n3 {
            margin-right: -1rem !important; }
        .mb-xl-n3,
        .my-xl-n3 {
            margin-bottom: -1rem !important; }
        .ml-xl-n3,
        .mx-xl-n3 {
            margin-left: -1rem !important; }
        .m-xl-n4 {
            margin: -1.5rem !important; }
        .mt-xl-n4,
        .my-xl-n4 {
            margin-top: -1.5rem !important; }
        .mr-xl-n4,
        .mx-xl-n4 {
            margin-right: -1.5rem !important; }
        .mb-xl-n4,
        .my-xl-n4 {
            margin-bottom: -1.5rem !important; }
        .ml-xl-n4,
        .mx-xl-n4 {
            margin-left: -1.5rem !important; }
        .m-xl-n5 {
            margin: -3rem !important; }
        .mt-xl-n5,
        .my-xl-n5 {
            margin-top: -3rem !important; }
        .mr-xl-n5,
        .mx-xl-n5 {
            margin-right: -3rem !important; }
        .mb-xl-n5,
        .my-xl-n5 {
            margin-bottom: -3rem !important; }
        .ml-xl-n5,
        .mx-xl-n5 {
            margin-left: -3rem !important; }
        .m-xl-auto {
            margin: auto !important; }
        .mt-xl-auto,
        .my-xl-auto {
            margin-top: auto !important; }
        .mr-xl-auto,
        .mx-xl-auto {
            margin-right: auto !important; }
        .mb-xl-auto,
        .my-xl-auto {
            margin-bottom: auto !important; }
        .ml-xl-auto,
        .mx-xl-auto {
            margin-left: auto !important; } }

    .text-monospace {
        font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace !important; }

    .text-justify {
        text-align: justify !important; }

    .text-wrap {
        white-space: normal !important; }

    .text-nowrap {
        white-space: nowrap !important; }

    .text-truncate {
        overflow: hidden;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
        white-space: nowrap; }

    .text-left {
        text-align: left !important; }

    .text-right {
        text-align: right !important; }

    .text-center {
        text-align: center !important; }

    @media (min-width: 576px) {
        .text-sm-left {
            text-align: left !important; }
        .text-sm-right {
            text-align: right !important; }
        .text-sm-center {
            text-align: center !important; } }

    @media (min-width: 768px) {
        .text-md-left {
            text-align: left !important; }
        .text-md-right {
            text-align: right !important; }
        .text-md-center {
            text-align: center !important; } }

    @media (min-width: 992px) {
        .text-lg-left {
            text-align: left !important; }
        .text-lg-right {
            text-align: right !important; }
        .text-lg-center {
            text-align: center !important; } }

    @media (min-width: 1200px) {
        .text-xl-left {
            text-align: left !important; }
        .text-xl-right {
            text-align: right !important; }
        .text-xl-center {
            text-align: center !important; } }

    .text-lowercase {
        text-transform: lowercase !important; }

    .text-uppercase {
        text-transform: uppercase !important; }

    .text-capitalize {
        text-transform: capitalize !important; }

    .font-weight-light {
        font-weight: 300 !important; }

    .font-weight-lighter {
        font-weight: lighter !important; }

    .font-weight-normal {
        font-weight: 400 !important; }

    .font-weight-bold {
        font-weight: 700 !important; }

    .font-weight-bolder {
        font-weight: bolder !important; }

    .font-italic {
        font-style: italic !important; }

    .text-white {
        color: #fff !important; }

    .text-primary {
        color: #007bff !important; }

    a.text-primary:hover, a.text-primary:focus {
        color: #0056b3 !important; }

    .text-secondary {
        color: #6c757d !important; }

    a.text-secondary:hover, a.text-secondary:focus {
        color: #494f54 !important; }

    .text-success {
        color: #28a745 !important; }

    a.text-success:hover, a.text-success:focus {
        color: #19692c !important; }

    .text-info {
        color: #17a2b8 !important; }

    a.text-info:hover, a.text-info:focus {
        color: #0f6674 !important; }

    .text-warning {
        color: #ffc107 !important; }

    a.text-warning:hover, a.text-warning:focus {
        color: #ba8b00 !important; }

    .text-danger {
        color: #dc3545 !important; }

    a.text-danger:hover, a.text-danger:focus {
        color: #a71d2a !important; }

    .text-light {
        color: #f8f9fa !important; }

    a.text-light:hover, a.text-light:focus {
        color: #cbd3da !important; }

    .text-dark {
        color: #343a40 !important; }

    a.text-dark:hover, a.text-dark:focus {
        color: #121416 !important; }

    .text-body {
        color: #212529 !important; }

    .text-muted {
        color: #6c757d !important; }

    .text-black-50 {
        color: rgba(0, 0, 0, 0.5) !important; }

    .text-white-50 {
        color: rgba(255, 255, 255, 0.5) !important; }

    .text-hide {
        font: 0/0 a;
        color: transparent;
        text-shadow: none;
        background-color: transparent;
        border: 0; }

    .text-decoration-none {
        text-decoration: none !important; }

    .text-break {
        word-break: break-word !important;
        overflow-wrap: break-word !important; }

    .text-reset {
        color: inherit !important; }

    .visible {
        visibility: visible !important; }

    .invisible {
        visibility: hidden !important; }

    @media print {
        *,
        *::before,
        *::after {
            text-shadow: none !important;
            -webkit-box-shadow: none !important;
            box-shadow: none !important; }
        a:not(.btn) {
            text-decoration: underline; }
        abbr[title]::after {
            content: " (" attr(title) ")"; }
        pre {
            white-space: pre-wrap !important; }
        pre,
        blockquote {
            border: 1px solid #adb5bd;
            page-break-inside: avoid; }
        thead {
            display: table-header-group; }
        tr,
        img {
            page-break-inside: avoid; }
        p,
        h2,
        h3 {
            orphans: 3;
            widows: 3; }
        h2,
        h3 {
            page-break-after: avoid; }
        @page {
            size: a3; }
        body {
            min-width: 992px !important; }
        .container {
            min-width: 992px !important; }
        .navbar {
            display: none; }
        .badge {
            border: 1px solid #000; }
        .table {
            border-collapse: collapse !important; }
        .table td,
        .table th {
            background-color: #fff !important; }
        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6 !important; }
        .table-dark {
            color: inherit; }
        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody + tbody {
            border-color: #dee2e6; }
        .table .thead-dark th {
            color: inherit;
            border-color: #dee2e6; } }

    body {
        font-family: "Poppins", Arial, sans-serif;
        font-size: 15px;
        line-height: 1.8;
        font-weight: normal; }

    a {
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
    a:hover, a:focus {
        text-decoration: none !important;
        outline: none !important; }

    h1, h2, h3, h4, h5,
    .h1, .h2, .h3, .h4, .h5 {
        line-height: 1.5;
        font-weight: 400;
        font-family: "Poppins", Arial, sans-serif; }

    .img,
    .blog-img,
    .user-img {
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center; }

    .ftco-footer-social li {
        list-style: none;
        margin: 0 10px 0 0;
        display: inline-block; }
    .ftco-footer-social li a {
        height: 40px;
        width: 40px;
        display: block;
        background: rgba(0, 0, 0, 0.05);
        border-radius: 50%;
        position: relative; }
    .ftco-footer-social li a span {
        position: absolute;
        font-size: 20px;
        top: 50%;
        left: 50%;
        -webkit-transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%); }
    .ftco-footer-social li a:hover {
        color: #fff; }

    .form-control {
        height: 52px;
        background: #fff;
        color: #000;
        font-size: 18px;
        border-radius: 0px;
        -webkit-box-shadow: none;
        box-shadow: none;
        border: 1px solid rgba(0, 0, 0, 0.1); }
    .form-control:focus, .form-control:active {
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none; }

    textarea.form-control {
        height: inherit !important; }

    .ftco-section {
        padding: 12em 0; }
    .ftco-section h2 {
        margin-bottom: 0; }

    footer {
        padding: 7em 0; }

    .footer-10 {
        background: #222222;
        padding: 0 0 4em 0; }
    .footer-10 .border-top, .footer-10 .border-bottom {
        border-color: rgba(255, 255, 255, 0.1) !important; }
    .footer-10 .footer-heading {
        font-size: 18px;
        color: #fff;
        margin-bottom: 30px; }
    .footer-10 p {
        color: rgba(255, 255, 255, 0.3); }
    .footer-10 a {
        color: #1089ff; }
    .footer-10 .con.con-1 {
        background: #1e1e1e; }
    .footer-10 .con.con-2 {
        background: #1c1c1c; }
    .footer-10 .con.con-3 {
        background: #252525; }
    .footer-10 .list-unstyled li a {
        color: rgba(255, 255, 255, 0.2); }
    .footer-10 .list-unstyled li a:hover {
        color: #fff; }
    .footer-10 .con-info .icon {
        width: 50px;
        height: 50px;
        background: #1089ff;
        border-radius: 50%;
        margin: 0 auto;
        margin-bottom: 10px; }
    .footer-10 .con-info .icon span {
        color: #fff;
        font-size: 24px; }
    .footer-10 .con-info span {
        color: rgba(255, 255, 255, 0.8); }
    .footer-10 .subscribe-form .form-group {
        position: relative;
        margin-bottom: 0;
        border-radius: 0; }
    .footer-10 .subscribe-form .form-group input {
        background: white !important;
        border: none !important;
        outline: none !important;
        color: rgba(0, 0, 0, 0.3) !important;
        font-size: 16px;
        border-radius: 0; }
    .footer-10 .subscribe-form .form-group input::-webkit-input-placeholder {
        /* Chrome/Opera/Safari */
        color: rgba(0, 0, 0, 0.3) !important; }
    .footer-10 .subscribe-form .form-group input::-moz-placeholder {
        /* Firefox 19+ */
        color: rgba(0, 0, 0, 0.3) !important; }
    .footer-10 .subscribe-form .form-group input:-ms-input-placeholder {
        /* IE 10+ */
        color: rgba(0, 0, 0, 0.3) !important; }
    .footer-10 .subscribe-form .form-group input:-moz-placeholder {
        /* Firefox 18- */
        color: rgba(0, 0, 0, 0.3) !important; }
    .footer-10 .subscribe-form .form-group input:focus {
        outline: none !important;
        -webkit-box-shadow: none;
        box-shadow: none; }
    .footer-10 .subscribe-form .form-group .submit {
        color: #fff !important;
        display: block;
        width: 130px;
        height: 52px;
        font-size: 16px;
        background: #1089ff !important;
        border: none;
        border-radius: 0; }
    .footer-10 .subscribe-form .form-group .submit:hover, .footer-10 .subscribe-form .form-group .submit:focus {
        text-decoration: none !important;
        outline: none !important; }
    .footer-10 .subscribe-form .subheading {
        display: inline-block;
        margin-top: 5px;
        color: rgba(255, 255, 255, 0.3);
        font-size: 13px; }
    .footer-10 .ftco-footer-social li a {
        background: rgba(255, 255, 255, 0.1);
        color: #fff; }
    /*!
  Ionicons, v4.0.0-19
  Created by Ben Sperry for the Ionic Framework, http://ionicons.com/
  https://twitter.com/benjsperry  https://twitter.com/ionicframework
  MIT License: https://github.com/driftyco/ionicons

  Android-style icons originally built by Googleâ€™s
  Material Design Icons: https://github.com/google/material-design-icons
  used under CC BY http://creativecommons.org/licenses/by/4.0/
  Modified icons to fit ioniconâ€™s grid from original.
*/@font-face{font-family:"Ionicons";src:url("../fonts/ionicons/fonts/ionicons.eot?v=4.0.0-19");src:url("../fonts/ionicons/fonts/ionicons.eot?v=4.0.0-19#iefix") format("embedded-opentype"),url("../fonts/ionicons/fonts/ionicons.woff2?v=4.0.0-19") format("woff2"),url("../fonts/ionicons/fonts/ionicons.woff?v=4.0.0-19") format("woff"),url("../fonts/ionicons/fonts/ionicons.ttf?v=4.0.0-19") format("truetype"),url("../fonts/ionicons/fonts/ionicons.svg?v=4.0.0-19#Ionicons") format("svg");font-weight:normal;font-style:normal}.ion,.ionicons,.ion-ios-add:before,.ion-ios-add-circle:before,.ion-ios-add-circle-outline:before,.ion-ios-airplane:before,.ion-ios-alarm:before,.ion-ios-albums:before,.ion-ios-alert:before,.ion-ios-american-football:before,.ion-ios-analytics:before,.ion-ios-aperture:before,.ion-ios-apps:before,.ion-ios-appstore:before,.ion-ios-archive:before,.ion-ios-arrow-back:before,.ion-ios-arrow-down:before,.ion-ios-arrow-dropdown:before,.ion-ios-arrow-dropdown-circle:before,.ion-ios-arrow-dropleft:before,.ion-ios-arrow-dropleft-circle:before,.ion-ios-arrow-dropright:before,.ion-ios-arrow-dropright-circle:before,.ion-ios-arrow-dropup:before,.ion-ios-arrow-dropup-circle:before,.ion-ios-arrow-forward:before,.ion-ios-arrow-round-back:before,.ion-ios-arrow-round-down:before,.ion-ios-arrow-round-forward:before,.ion-ios-arrow-round-up:before,.ion-ios-arrow-up:before,.ion-ios-at:before,.ion-ios-attach:before,.ion-ios-backspace:before,.ion-ios-barcode:before,.ion-ios-baseball:before,.ion-ios-basket:before,.ion-ios-basketball:before,.ion-ios-battery-charging:before,.ion-ios-battery-dead:before,.ion-ios-battery-full:before,.ion-ios-beaker:before,.ion-ios-bed:before,.ion-ios-beer:before,.ion-ios-bicycle:before,.ion-ios-bluetooth:before,.ion-ios-boat:before,.ion-ios-body:before,.ion-ios-bonfire:before,.ion-ios-book:before,.ion-ios-bookmark:before,.ion-ios-bookmarks:before,.ion-ios-bowtie:before,.ion-ios-briefcase:before,.ion-ios-browsers:before,.ion-ios-brush:before,.ion-ios-bug:before,.ion-ios-build:before,.ion-ios-bulb:before,.ion-ios-bus:before,.ion-ios-business:before,.ion-ios-cafe:before,.ion-ios-calculator:before,.ion-ios-calendar:before,.ion-ios-call:before,.ion-ios-camera:before,.ion-ios-car:before,.ion-ios-card:before,.ion-ios-cart:before,.ion-ios-cash:before,.ion-ios-cellular:before,.ion-ios-chatboxes:before,.ion-ios-chatbubbles:before,.ion-ios-checkbox:before,.ion-ios-checkbox-outline:before,.ion-ios-checkmark:before,.ion-ios-checkmark-circle:before,.ion-ios-checkmark-circle-outline:before,.ion-ios-clipboard:before,.ion-ios-clock:before,.ion-ios-close:before,.ion-ios-close-circle:before,.ion-ios-close-circle-outline:before,.ion-ios-cloud:before,.ion-ios-cloud-circle:before,.ion-ios-cloud-done:before,.ion-ios-cloud-download:before,.ion-ios-cloud-outline:before,.ion-ios-cloud-upload:before,.ion-ios-cloudy:before,.ion-ios-cloudy-night:before,.ion-ios-code:before,.ion-ios-code-download:before,.ion-ios-code-working:before,.ion-ios-cog:before,.ion-ios-color-fill:before,.ion-ios-color-filter:before,.ion-ios-color-palette:before,.ion-ios-color-wand:before,.ion-ios-compass:before,.ion-ios-construct:before,.ion-ios-contact:before,.ion-ios-contacts:before,.ion-ios-contract:before,.ion-ios-contrast:before,.ion-ios-copy:before,.ion-ios-create:before,.ion-ios-crop:before,.ion-ios-cube:before,.ion-ios-cut:before,.ion-ios-desktop:before,.ion-ios-disc:before,.ion-ios-document:before,.ion-ios-done-all:before,.ion-ios-download:before,.ion-ios-easel:before,.ion-ios-egg:before,.ion-ios-exit:before,.ion-ios-expand:before,.ion-ios-eye:before,.ion-ios-eye-off:before,.ion-ios-fastforward:before,.ion-ios-female:before,.ion-ios-filing:before,.ion-ios-film:before,.ion-ios-finger-print:before,.ion-ios-fitness:before,.ion-ios-flag:before,.ion-ios-flame:before,.ion-ios-flash:before,.ion-ios-flash-off:before,.ion-ios-flashlight:before,.ion-ios-flask:before,.ion-ios-flower:before,.ion-ios-folder:before,.ion-ios-folder-open:before,.ion-ios-football:before,.ion-ios-funnel:before,.ion-ios-gift:before,.ion-ios-git-branch:before,.ion-ios-git-commit:before,.ion-ios-git-compare:before,.ion-ios-git-merge:before,.ion-ios-git-network:before,.ion-ios-git-pull-request:before,.ion-ios-glasses:before,.ion-ios-globe:before,.ion-ios-grid:before,.ion-ios-hammer:before,.ion-ios-hand:before,.ion-ios-happy:before,.ion-ios-headset:before,.ion-ios-heart:before,.ion-ios-heart-dislike:before,.ion-ios-heart-empty:before,.ion-ios-heart-half:before,.ion-ios-help:before,.ion-ios-help-buoy:before,.ion-ios-help-circle:before,.ion-ios-help-circle-outline:before,.ion-ios-home:before,.ion-ios-hourglass:before,.ion-ios-ice-cream:before,.ion-ios-image:before,.ion-ios-images:before,.ion-ios-infinite:before,.ion-ios-information:before,.ion-ios-information-circle:before,.ion-ios-information-circle-outline:before,.ion-ios-jet:before,.ion-ios-journal:before,.ion-ios-key:before,.ion-ios-keypad:before,.ion-ios-laptop:before,.ion-ios-leaf:before,.ion-ios-link:before,.ion-ios-list:before,.ion-ios-list-box:before,.ion-ios-locate:before,.ion-ios-lock:before,.ion-ios-log-in:before,.ion-ios-log-out:before,.ion-ios-magnet:before,.ion-ios-mail:before,.ion-ios-mail-open:before,.ion-ios-mail-unread:before,.ion-ios-male:before,.ion-ios-man:before,.ion-ios-map:before,.ion-ios-medal:before,.ion-ios-medical:before,.ion-ios-medkit:before,.ion-ios-megaphone:before,.ion-ios-menu:before,.ion-ios-mic:before,.ion-ios-mic-off:before,.ion-ios-microphone:before,.ion-ios-moon:before,.ion-ios-more:before,.ion-ios-move:before,.ion-ios-musical-note:before,.ion-ios-musical-notes:before,.ion-ios-navigate:before,.ion-ios-notifications:before,.ion-ios-notifications-off:before,.ion-ios-notifications-outline:before,.ion-ios-nuclear:before,.ion-ios-nutrition:before,.ion-ios-open:before,.ion-ios-options:before,.ion-ios-outlet:before,.ion-ios-paper:before,.ion-ios-paper-plane:before,.ion-ios-partly-sunny:before,.ion-ios-pause:before,.ion-ios-paw:before,.ion-ios-people:before,.ion-ios-person:before,.ion-ios-person-add:before,.ion-ios-phone-landscape:before,.ion-ios-phone-portrait:before,.ion-ios-photos:before,.ion-ios-pie:before,.ion-ios-pin:before,.ion-ios-pint:before,.ion-ios-pizza:before,.ion-ios-plane:before,.ion-ios-planet:before,.ion-ios-play:before,.ion-ios-play-circle:before,.ion-ios-podium:before,.ion-ios-power:before,.ion-ios-pricetag:before,.ion-ios-pricetags:before,.ion-ios-print:before,.ion-ios-pulse:before,.ion-ios-qr-scanner:before,.ion-ios-quote:before,.ion-ios-radio:before,.ion-ios-radio-button-off:before,.ion-ios-radio-button-on:before,.ion-ios-rainy:before,.ion-ios-recording:before,.ion-ios-redo:before,.ion-ios-refresh:before,.ion-ios-refresh-circle:before,.ion-ios-remove:before,.ion-ios-remove-circle:before,.ion-ios-remove-circle-outline:before,.ion-ios-reorder:before,.ion-ios-repeat:before,.ion-ios-resize:before,.ion-ios-restaurant:before,.ion-ios-return-left:before,.ion-ios-return-right:before,.ion-ios-reverse-camera:before,.ion-ios-rewind:before,.ion-ios-ribbon:before,.ion-ios-rocket:before,.ion-ios-rose:before,.ion-ios-sad:before,.ion-ios-save:before,.ion-ios-school:before,.ion-ios-search:before,.ion-ios-send:before,.ion-ios-settings:before,.ion-ios-share:before,.ion-ios-share-alt:before,.ion-ios-shirt:before,.ion-ios-shuffle:before,.ion-ios-skip-backward:before,.ion-ios-skip-forward:before,.ion-ios-snow:before,.ion-ios-speedometer:before,.ion-ios-square:before,.ion-ios-square-outline:before,.ion-ios-star:before,.ion-ios-star-half:before,.ion-ios-star-outline:before,.ion-ios-stats:before,.ion-ios-stopwatch:before,.ion-ios-subway:before,.ion-ios-sunny:before,.ion-ios-swap:before,.ion-ios-switch:before,.ion-ios-sync:before,.ion-ios-tablet-landscape:before,.ion-ios-tablet-portrait:before,.ion-ios-tennisball:before,.ion-ios-text:before,.ion-ios-thermometer:before,.ion-ios-thumbs-down:before,.ion-ios-thumbs-up:before,.ion-ios-thunderstorm:before,.ion-ios-time:before,.ion-ios-timer:before,.ion-ios-today:before,.ion-ios-train:before,.ion-ios-transgender:before,.ion-ios-trash:before,.ion-ios-trending-down:before,.ion-ios-trending-up:before,.ion-ios-trophy:before,.ion-ios-tv:before,.ion-ios-umbrella:before,.ion-ios-undo:before,.ion-ios-unlock:before,.ion-ios-videocam:before,.ion-ios-volume-high:before,.ion-ios-volume-low:before,.ion-ios-volume-mute:before,.ion-ios-volume-off:before,.ion-ios-walk:before,.ion-ios-wallet:before,.ion-ios-warning:before,.ion-ios-watch:before,.ion-ios-water:before,.ion-ios-wifi:before,.ion-ios-wine:before,.ion-ios-woman:before,.ion-logo-android:before,.ion-logo-angular:before,.ion-logo-apple:before,.ion-logo-bitbucket:before,.ion-logo-bitcoin:before,.ion-logo-buffer:before,.ion-logo-chrome:before,.ion-logo-closed-captioning:before,.ion-logo-codepen:before,.ion-logo-css3:before,.ion-logo-designernews:before,.ion-logo-dribbble:before,.ion-logo-dropbox:before,.ion-logo-euro:before,.ion-logo-facebook:before,.ion-logo-flickr:before,.ion-logo-foursquare:before,.ion-logo-freebsd-devil:before,.ion-logo-game-controller-a:before,.ion-logo-game-controller-b:before,.ion-logo-github:before,.ion-logo-google:before,.ion-logo-googleplus:before,.ion-logo-hackernews:before,.ion-logo-html5:before,.ion-logo-instagram:before,.ion-logo-ionic:before,.ion-logo-ionitron:before,.ion-logo-javascript:before,.ion-logo-linkedin:before,.ion-logo-markdown:before,.ion-logo-model-s:before,.ion-logo-no-smoking:before,.ion-logo-nodejs:before,.ion-logo-npm:before,.ion-logo-octocat:before,.ion-logo-pinterest:before,.ion-logo-playstation:before,.ion-logo-polymer:before,.ion-logo-python:before,.ion-logo-reddit:before,.ion-logo-rss:before,.ion-logo-sass:before,.ion-logo-skype:before,.ion-logo-slack:before,.ion-logo-snapchat:before,.ion-logo-steam:before,.ion-logo-tumblr:before,.ion-logo-tux:before,.ion-logo-twitch:before,.ion-logo-twitter:before,.ion-logo-usd:before,.ion-logo-vimeo:before,.ion-logo-vk:before,.ion-logo-whatsapp:before,.ion-logo-windows:before,.ion-logo-wordpress:before,.ion-logo-xbox:before,.ion-logo-xing:before,.ion-logo-yahoo:before,.ion-logo-yen:before,.ion-logo-youtube:before,.ion-md-add:before,.ion-md-add-circle:before,.ion-md-add-circle-outline:before,.ion-md-airplane:before,.ion-md-alarm:before,.ion-md-albums:before,.ion-md-alert:before,.ion-md-american-football:before,.ion-md-analytics:before,.ion-md-aperture:before,.ion-md-apps:before,.ion-md-appstore:before,.ion-md-archive:before,.ion-md-arrow-back:before,.ion-md-arrow-down:before,.ion-md-arrow-dropdown:before,.ion-md-arrow-dropdown-circle:before,.ion-md-arrow-dropleft:before,.ion-md-arrow-dropleft-circle:before,.ion-md-arrow-dropright:before,.ion-md-arrow-dropright-circle:before,.ion-md-arrow-dropup:before,.ion-md-arrow-dropup-circle:before,.ion-md-arrow-forward:before,.ion-md-arrow-round-back:before,.ion-md-arrow-round-down:before,.ion-md-arrow-round-forward:before,.ion-md-arrow-round-up:before,.ion-md-arrow-up:before,.ion-md-at:before,.ion-md-attach:before,.ion-md-backspace:before,.ion-md-barcode:before,.ion-md-baseball:before,.ion-md-basket:before,.ion-md-basketball:before,.ion-md-battery-charging:before,.ion-md-battery-dead:before,.ion-md-battery-full:before,.ion-md-beaker:before,.ion-md-bed:before,.ion-md-beer:before,.ion-md-bicycle:before,.ion-md-bluetooth:before,.ion-md-boat:before,.ion-md-body:before,.ion-md-bonfire:before,.ion-md-book:before,.ion-md-bookmark:before,.ion-md-bookmarks:before,.ion-md-bowtie:before,.ion-md-briefcase:before,.ion-md-browsers:before,.ion-md-brush:before,.ion-md-bug:before,.ion-md-build:before,.ion-md-bulb:before,.ion-md-bus:before,.ion-md-business:before,.ion-md-cafe:before,.ion-md-calculator:before,.ion-md-calendar:before,.ion-md-call:before,.ion-md-camera:before,.ion-md-car:before,.ion-md-card:before,.ion-md-cart:before,.ion-md-cash:before,.ion-md-cellular:before,.ion-md-chatboxes:before,.ion-md-chatbubbles:before,.ion-md-checkbox:before,.ion-md-checkbox-outline:before,.ion-md-checkmark:before,.ion-md-checkmark-circle:before,.ion-md-checkmark-circle-outline:before,.ion-md-clipboard:before,.ion-md-clock:before,.ion-md-close:before,.ion-md-close-circle:before,.ion-md-close-circle-outline:before,.ion-md-cloud:before,.ion-md-cloud-circle:before,.ion-md-cloud-done:before,.ion-md-cloud-download:before,.ion-md-cloud-outline:before,.ion-md-cloud-upload:before,.ion-md-cloudy:before,.ion-md-cloudy-night:before,.ion-md-code:before,.ion-md-code-download:before,.ion-md-code-working:before,.ion-md-cog:before,.ion-md-color-fill:before,.ion-md-color-filter:before,.ion-md-color-palette:before,.ion-md-color-wand:before,.ion-md-compass:before,.ion-md-construct:before,.ion-md-contact:before,.ion-md-contacts:before,.ion-md-contract:before,.ion-md-contrast:before,.ion-md-copy:before,.ion-md-create:before,.ion-md-crop:before,.ion-md-cube:before,.ion-md-cut:before,.ion-md-desktop:before,.ion-md-disc:before,.ion-md-document:before,.ion-md-done-all:before,.ion-md-download:before,.ion-md-easel:before,.ion-md-egg:before,.ion-md-exit:before,.ion-md-expand:before,.ion-md-eye:before,.ion-md-eye-off:before,.ion-md-fastforward:before,.ion-md-female:before,.ion-md-filing:before,.ion-md-film:before,.ion-md-finger-print:before,.ion-md-fitness:before,.ion-md-flag:before,.ion-md-flame:before,.ion-md-flash:before,.ion-md-flash-off:before,.ion-md-flashlight:before,.ion-md-flask:before,.ion-md-flower:before,.ion-md-folder:before,.ion-md-folder-open:before,.ion-md-football:before,.ion-md-funnel:before,.ion-md-gift:before,.ion-md-git-branch:before,.ion-md-git-commit:before,.ion-md-git-compare:before,.ion-md-git-merge:before,.ion-md-git-network:before,.ion-md-git-pull-request:before,.ion-md-glasses:before,.ion-md-globe:before,.ion-md-grid:before,.ion-md-hammer:before,.ion-md-hand:before,.ion-md-happy:before,.ion-md-headset:before,.ion-md-heart:before,.ion-md-heart-dislike:before,.ion-md-heart-empty:before,.ion-md-heart-half:before,.ion-md-help:before,.ion-md-help-buoy:before,.ion-md-help-circle:before,.ion-md-help-circle-outline:before,.ion-md-home:before,.ion-md-hourglass:before,.ion-md-ice-cream:before,.ion-md-image:before,.ion-md-images:before,.ion-md-infinite:before,.ion-md-information:before,.ion-md-information-circle:before,.ion-md-information-circle-outline:before,.ion-md-jet:before,.ion-md-journal:before,.ion-md-key:before,.ion-md-keypad:before,.ion-md-laptop:before,.ion-md-leaf:before,.ion-md-link:before,.ion-md-list:before,.ion-md-list-box:before,.ion-md-locate:before,.ion-md-lock:before,.ion-md-log-in:before,.ion-md-log-out:before,.ion-md-magnet:before,.ion-md-mail:before,.ion-md-mail-open:before,.ion-md-mail-unread:before,.ion-md-male:before,.ion-md-man:before,.ion-md-map:before,.ion-md-medal:before,.ion-md-medical:before,.ion-md-medkit:before,.ion-md-megaphone:before,.ion-md-menu:before,.ion-md-mic:before,.ion-md-mic-off:before,.ion-md-microphone:before,.ion-md-moon:before,.ion-md-more:before,.ion-md-move:before,.ion-md-musical-note:before,.ion-md-musical-notes:before,.ion-md-navigate:before,.ion-md-notifications:before,.ion-md-notifications-off:before,.ion-md-notifications-outline:before,.ion-md-nuclear:before,.ion-md-nutrition:before,.ion-md-open:before,.ion-md-options:before,.ion-md-outlet:before,.ion-md-paper:before,.ion-md-paper-plane:before,.ion-md-partly-sunny:before,.ion-md-pause:before,.ion-md-paw:before,.ion-md-people:before,.ion-md-person:before,.ion-md-person-add:before,.ion-md-phone-landscape:before,.ion-md-phone-portrait:before,.ion-md-photos:before,.ion-md-pie:before,.ion-md-pin:before,.ion-md-pint:before,.ion-md-pizza:before,.ion-md-plane:before,.ion-md-planet:before,.ion-md-play:before,.ion-md-play-circle:before,.ion-md-podium:before,.ion-md-power:before,.ion-md-pricetag:before,.ion-md-pricetags:before,.ion-md-print:before,.ion-md-pulse:before,.ion-md-qr-scanner:before,.ion-md-quote:before,.ion-md-radio:before,.ion-md-radio-button-off:before,.ion-md-radio-button-on:before,.ion-md-rainy:before,.ion-md-recording:before,.ion-md-redo:before,.ion-md-refresh:before,.ion-md-refresh-circle:before,.ion-md-remove:before,.ion-md-remove-circle:before,.ion-md-remove-circle-outline:before,.ion-md-reorder:before,.ion-md-repeat:before,.ion-md-resize:before,.ion-md-restaurant:before,.ion-md-return-left:before,.ion-md-return-right:before,.ion-md-reverse-camera:before,.ion-md-rewind:before,.ion-md-ribbon:before,.ion-md-rocket:before,.ion-md-rose:before,.ion-md-sad:before,.ion-md-save:before,.ion-md-school:before,.ion-md-search:before,.ion-md-send:before,.ion-md-settings:before,.ion-md-share:before,.ion-md-share-alt:before,.ion-md-shirt:before,.ion-md-shuffle:before,.ion-md-skip-backward:before,.ion-md-skip-forward:before,.ion-md-snow:before,.ion-md-speedometer:before,.ion-md-square:before,.ion-md-square-outline:before,.ion-md-star:before,.ion-md-star-half:before,.ion-md-star-outline:before,.ion-md-stats:before,.ion-md-stopwatch:before,.ion-md-subway:before,.ion-md-sunny:before,.ion-md-swap:before,.ion-md-switch:before,.ion-md-sync:before,.ion-md-tablet-landscape:before,.ion-md-tablet-portrait:before,.ion-md-tennisball:before,.ion-md-text:before,.ion-md-thermometer:before,.ion-md-thumbs-down:before,.ion-md-thumbs-up:before,.ion-md-thunderstorm:before,.ion-md-time:before,.ion-md-timer:before,.ion-md-today:before,.ion-md-train:before,.ion-md-transgender:before,.ion-md-trash:before,.ion-md-trending-down:before,.ion-md-trending-up:before,.ion-md-trophy:before,.ion-md-tv:before,.ion-md-umbrella:before,.ion-md-undo:before,.ion-md-unlock:before,.ion-md-videocam:before,.ion-md-volume-high:before,.ion-md-volume-low:before,.ion-md-volume-mute:before,.ion-md-volume-off:before,.ion-md-walk:before,.ion-md-wallet:before,.ion-md-warning:before,.ion-md-watch:before,.ion-md-water:before,.ion-md-wifi:before,.ion-md-wine:before,.ion-md-woman:before{display:inline-block;font-family:"Ionicons";speak:none;font-style:normal;font-weight:normal;font-variant:normal;text-transform:none;text-rendering:auto;line-height:1;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.ion-ios-add:before{content:"\f102"}.ion-ios-add-circle:before{content:"\f101"}.ion-ios-add-circle-outline:before{content:"\f100"}.ion-ios-airplane:before{content:"\f137"}.ion-ios-alarm:before{content:"\f3c8"}.ion-ios-albums:before{content:"\f3ca"}.ion-ios-alert:before{content:"\f104"}.ion-ios-american-football:before{content:"\f106"}.ion-ios-analytics:before{content:"\f3ce"}.ion-ios-aperture:before{content:"\f108"}.ion-ios-apps:before{content:"\f10a"}.ion-ios-appstore:before{content:"\f10c"}.ion-ios-archive:before{content:"\f10e"}.ion-ios-arrow-back:before{content:"\f3cf"}.ion-ios-arrow-down:before{content:"\f3d0"}.ion-ios-arrow-dropdown:before{content:"\f110"}.ion-ios-arrow-dropdown-circle:before{content:"\f125"}.ion-ios-arrow-dropleft:before{content:"\f112"}.ion-ios-arrow-dropleft-circle:before{content:"\f129"}.ion-ios-arrow-dropright:before{content:"\f114"}.ion-ios-arrow-dropright-circle:before{content:"\f12b"}.ion-ios-arrow-dropup:before{content:"\f116"}.ion-ios-arrow-dropup-circle:before{content:"\f12d"}.ion-ios-arrow-forward:before{content:"\f3d1"}.ion-ios-arrow-round-back:before{content:"\f117"}.ion-ios-arrow-round-down:before{content:"\f118"}.ion-ios-arrow-round-forward:before{content:"\f119"}.ion-ios-arrow-round-up:before{content:"\f11a"}.ion-ios-arrow-up:before{content:"\f3d8"}.ion-ios-at:before{content:"\f3da"}.ion-ios-attach:before{content:"\f11b"}.ion-ios-backspace:before{content:"\f11d"}.ion-ios-barcode:before{content:"\f3dc"}.ion-ios-baseball:before{content:"\f3de"}.ion-ios-basket:before{content:"\f11f"}.ion-ios-basketball:before{content:"\f3e0"}.ion-ios-battery-charging:before{content:"\f120"}.ion-ios-battery-dead:before{content:"\f121"}.ion-ios-battery-full:before{content:"\f122"}.ion-ios-beaker:before{content:"\f124"}.ion-ios-bed:before{content:"\f139"}.ion-ios-beer:before{content:"\f126"}.ion-ios-bicycle:before{content:"\f127"}.ion-ios-bluetooth:before{content:"\f128"}.ion-ios-boat:before{content:"\f12a"}.ion-ios-body:before{content:"\f3e4"}.ion-ios-bonfire:before{content:"\f12c"}.ion-ios-book:before{content:"\f3e8"}.ion-ios-bookmark:before{content:"\f12e"}.ion-ios-bookmarks:before{content:"\f3ea"}.ion-ios-bowtie:before{content:"\f130"}.ion-ios-briefcase:before{content:"\f3ee"}.ion-ios-browsers:before{content:"\f3f0"}.ion-ios-brush:before{content:"\f132"}.ion-ios-bug:before{content:"\f134"}.ion-ios-build:before{content:"\f136"}.ion-ios-bulb:before{content:"\f138"}.ion-ios-bus:before{content:"\f13a"}.ion-ios-business:before{content:"\f1a3"}.ion-ios-cafe:before{content:"\f13c"}.ion-ios-calculator:before{content:"\f3f2"}.ion-ios-calendar:before{content:"\f3f4"}.ion-ios-call:before{content:"\f13e"}.ion-ios-camera:before{content:"\f3f6"}.ion-ios-car:before{content:"\f140"}.ion-ios-card:before{content:"\f142"}.ion-ios-cart:before{content:"\f3f8"}.ion-ios-cash:before{content:"\f144"}.ion-ios-cellular:before{content:"\f13d"}.ion-ios-chatboxes:before{content:"\f3fa"}.ion-ios-chatbubbles:before{content:"\f146"}.ion-ios-checkbox:before{content:"\f148"}.ion-ios-checkbox-outline:before{content:"\f147"}.ion-ios-checkmark:before{content:"\f3ff"}.ion-ios-checkmark-circle:before{content:"\f14a"}.ion-ios-checkmark-circle-outline:before{content:"\f149"}.ion-ios-clipboard:before{content:"\f14c"}.ion-ios-clock:before{content:"\f403"}.ion-ios-close:before{content:"\f406"}.ion-ios-close-circle:before{content:"\f14e"}.ion-ios-close-circle-outline:before{content:"\f14d"}.ion-ios-cloud:before{content:"\f40c"}.ion-ios-cloud-circle:before{content:"\f152"}.ion-ios-cloud-done:before{content:"\f154"}.ion-ios-cloud-download:before{content:"\f408"}.ion-ios-cloud-outline:before{content:"\f409"}.ion-ios-cloud-upload:before{content:"\f40b"}.ion-ios-cloudy:before{content:"\f410"}.ion-ios-cloudy-night:before{content:"\f40e"}.ion-ios-code:before{content:"\f157"}.ion-ios-code-download:before{content:"\f155"}.ion-ios-code-working:before{content:"\f156"}.ion-ios-cog:before{content:"\f412"}.ion-ios-color-fill:before{content:"\f159"}.ion-ios-color-filter:before{content:"\f414"}.ion-ios-color-palette:before{content:"\f15b"}.ion-ios-color-wand:before{content:"\f416"}.ion-ios-compass:before{content:"\f15d"}.ion-ios-construct:before{content:"\f15f"}.ion-ios-contact:before{content:"\f41a"}.ion-ios-contacts:before{content:"\f161"}.ion-ios-contract:before{content:"\f162"}.ion-ios-contrast:before{content:"\f163"}.ion-ios-copy:before{content:"\f41c"}.ion-ios-create:before{content:"\f165"}.ion-ios-crop:before{content:"\f41e"}.ion-ios-cube:before{content:"\f168"}.ion-ios-cut:before{content:"\f16a"}.ion-ios-desktop:before{content:"\f16c"}.ion-ios-disc:before{content:"\f16e"}.ion-ios-document:before{content:"\f170"}.ion-ios-done-all:before{content:"\f171"}.ion-ios-download:before{content:"\f420"}.ion-ios-easel:before{content:"\f173"}.ion-ios-egg:before{content:"\f175"}.ion-ios-exit:before{content:"\f177"}.ion-ios-expand:before{content:"\f178"}.ion-ios-eye:before{content:"\f425"}.ion-ios-eye-off:before{content:"\f17a"}.ion-ios-fastforward:before{content:"\f427"}.ion-ios-female:before{content:"\f17b"}.ion-ios-filing:before{content:"\f429"}.ion-ios-film:before{content:"\f42b"}.ion-ios-finger-print:before{content:"\f17c"}.ion-ios-fitness:before{content:"\f1ab"}.ion-ios-flag:before{content:"\f42d"}.ion-ios-flame:before{content:"\f42f"}.ion-ios-flash:before{content:"\f17e"}.ion-ios-flash-off:before{content:"\f12f"}.ion-ios-flashlight:before{content:"\f141"}.ion-ios-flask:before{content:"\f431"}.ion-ios-flower:before{content:"\f433"}.ion-ios-folder:before{content:"\f435"}.ion-ios-folder-open:before{content:"\f180"}.ion-ios-football:before{content:"\f437"}.ion-ios-funnel:before{content:"\f182"}.ion-ios-gift:before{content:"\f191"}.ion-ios-git-branch:before{content:"\f183"}.ion-ios-git-commit:before{content:"\f184"}.ion-ios-git-compare:before{content:"\f185"}.ion-ios-git-merge:before{content:"\f186"}.ion-ios-git-network:before{content:"\f187"}.ion-ios-git-pull-request:before{content:"\f188"}.ion-ios-glasses:before{content:"\f43f"}.ion-ios-globe:before{content:"\f18a"}.ion-ios-grid:before{content:"\f18c"}.ion-ios-hammer:before{content:"\f18e"}.ion-ios-hand:before{content:"\f190"}.ion-ios-happy:before{content:"\f192"}.ion-ios-headset:before{content:"\f194"}.ion-ios-heart:before{content:"\f443"}.ion-ios-heart-dislike:before{content:"\f13f"}.ion-ios-heart-empty:before{content:"\f19b"}.ion-ios-heart-half:before{content:"\f19d"}.ion-ios-help:before{content:"\f446"}.ion-ios-help-buoy:before{content:"\f196"}.ion-ios-help-circle:before{content:"\f198"}.ion-ios-help-circle-outline:before{content:"\f197"}.ion-ios-home:before{content:"\f448"}.ion-ios-hourglass:before{content:"\f103"}.ion-ios-ice-cream:before{content:"\f19a"}.ion-ios-image:before{content:"\f19c"}.ion-ios-images:before{content:"\f19e"}.ion-ios-infinite:before{content:"\f44a"}.ion-ios-information:before{content:"\f44d"}.ion-ios-information-circle:before{content:"\f1a0"}.ion-ios-information-circle-outline:before{content:"\f19f"}.ion-ios-jet:before{content:"\f1a5"}.ion-ios-journal:before{content:"\f189"}.ion-ios-key:before{content:"\f1a7"}.ion-ios-keypad:before{content:"\f450"}.ion-ios-laptop:before{content:"\f1a8"}.ion-ios-leaf:before{content:"\f1aa"}.ion-ios-link:before{content:"\f22a"}.ion-ios-list:before{content:"\f454"}.ion-ios-list-box:before{content:"\f143"}.ion-ios-locate:before{content:"\f1ae"}.ion-ios-lock:before{content:"\f1b0"}.ion-ios-log-in:before{content:"\f1b1"}.ion-ios-log-out:before{content:"\f1b2"}.ion-ios-magnet:before{content:"\f1b4"}.ion-ios-mail:before{content:"\f1b8"}.ion-ios-mail-open:before{content:"\f1b6"}.ion-ios-mail-unread:before{content:"\f145"}.ion-ios-male:before{content:"\f1b9"}.ion-ios-man:before{content:"\f1bb"}.ion-ios-map:before{content:"\f1bd"}.ion-ios-medal:before{content:"\f1bf"}.ion-ios-medical:before{content:"\f45c"}.ion-ios-medkit:before{content:"\f45e"}.ion-ios-megaphone:before{content:"\f1c1"}.ion-ios-menu:before{content:"\f1c3"}.ion-ios-mic:before{content:"\f461"}.ion-ios-mic-off:before{content:"\f45f"}.ion-ios-microphone:before{content:"\f1c6"}.ion-ios-moon:before{content:"\f468"}.ion-ios-more:before{content:"\f1c8"}.ion-ios-move:before{content:"\f1cb"}.ion-ios-musical-note:before{content:"\f46b"}.ion-ios-musical-notes:before{content:"\f46c"}.ion-ios-navigate:before{content:"\f46e"}.ion-ios-notifications:before{content:"\f1d3"}.ion-ios-notifications-off:before{content:"\f1d1"}.ion-ios-notifications-outline:before{content:"\f133"}.ion-ios-nuclear:before{content:"\f1d5"}.ion-ios-nutrition:before{content:"\f470"}.ion-ios-open:before{content:"\f1d7"}.ion-ios-options:before{content:"\f1d9"}.ion-ios-outlet:before{content:"\f1db"}.ion-ios-paper:before{content:"\f472"}.ion-ios-paper-plane:before{content:"\f1dd"}.ion-ios-partly-sunny:before{content:"\f1df"}.ion-ios-pause:before{content:"\f478"}.ion-ios-paw:before{content:"\f47a"}.ion-ios-people:before{content:"\f47c"}.ion-ios-person:before{content:"\f47e"}.ion-ios-person-add:before{content:"\f1e1"}.ion-ios-phone-landscape:before{content:"\f1e2"}.ion-ios-phone-portrait:before{content:"\f1e3"}.ion-ios-photos:before{content:"\f482"}.ion-ios-pie:before{content:"\f484"}.ion-ios-pin:before{content:"\f1e5"}.ion-ios-pint:before{content:"\f486"}.ion-ios-pizza:before{content:"\f1e7"}.ion-ios-plane:before{content:"\f1e9"}.ion-ios-planet:before{content:"\f1eb"}.ion-ios-play:before{content:"\f488"}.ion-ios-play-circle:before{content:"\f113"}.ion-ios-podium:before{content:"\f1ed"}.ion-ios-power:before{content:"\f1ef"}.ion-ios-pricetag:before{content:"\f48d"}.ion-ios-pricetags:before{content:"\f48f"}.ion-ios-print:before{content:"\f1f1"}.ion-ios-pulse:before{content:"\f493"}.ion-ios-qr-scanner:before{content:"\f1f3"}.ion-ios-quote:before{content:"\f1f5"}.ion-ios-radio:before{content:"\f1f9"}.ion-ios-radio-button-off:before{content:"\f1f6"}.ion-ios-radio-button-on:before{content:"\f1f7"}.ion-ios-rainy:before{content:"\f495"}.ion-ios-recording:before{content:"\f497"}.ion-ios-redo:before{content:"\f499"}.ion-ios-refresh:before{content:"\f49c"}.ion-ios-refresh-circle:before{content:"\f135"}.ion-ios-remove:before{content:"\f1fc"}.ion-ios-remove-circle:before{content:"\f1fb"}.ion-ios-remove-circle-outline:before{content:"\f1fa"}.ion-ios-reorder:before{content:"\f1fd"}.ion-ios-repeat:before{content:"\f1fe"}.ion-ios-resize:before{content:"\f1ff"}.ion-ios-restaurant:before{content:"\f201"}.ion-ios-return-left:before{content:"\f202"}.ion-ios-return-right:before{content:"\f203"}.ion-ios-reverse-camera:before{content:"\f49f"}.ion-ios-rewind:before{content:"\f4a1"}.ion-ios-ribbon:before{content:"\f205"}.ion-ios-rocket:before{content:"\f14b"}.ion-ios-rose:before{content:"\f4a3"}.ion-ios-sad:before{content:"\f207"}.ion-ios-save:before{content:"\f1a6"}.ion-ios-school:before{content:"\f209"}.ion-ios-search:before{content:"\f4a5"}.ion-ios-send:before{content:"\f20c"}.ion-ios-settings:before{content:"\f4a7"}.ion-ios-share:before{content:"\f211"}.ion-ios-share-alt:before{content:"\f20f"}.ion-ios-shirt:before{content:"\f213"}.ion-ios-shuffle:before{content:"\f4a9"}.ion-ios-skip-backward:before{content:"\f215"}.ion-ios-skip-forward:before{content:"\f217"}.ion-ios-snow:before{content:"\f218"}.ion-ios-speedometer:before{content:"\f4b0"}.ion-ios-square:before{content:"\f21a"}.ion-ios-square-outline:before{content:"\f15c"}.ion-ios-star:before{content:"\f4b3"}.ion-ios-star-half:before{content:"\f4b1"}.ion-ios-star-outline:before{content:"\f4b2"}.ion-ios-stats:before{content:"\f21c"}.ion-ios-stopwatch:before{content:"\f4b5"}.ion-ios-subway:before{content:"\f21e"}.ion-ios-sunny:before{content:"\f4b7"}.ion-ios-swap:before{content:"\f21f"}.ion-ios-switch:before{content:"\f221"}.ion-ios-sync:before{content:"\f222"}.ion-ios-tablet-landscape:before{content:"\f223"}.ion-ios-tablet-portrait:before{content:"\f24e"}.ion-ios-tennisball:before{content:"\f4bb"}.ion-ios-text:before{content:"\f250"}.ion-ios-thermometer:before{content:"\f252"}.ion-ios-thumbs-down:before{content:"\f254"}.ion-ios-thumbs-up:before{content:"\f256"}.ion-ios-thunderstorm:before{content:"\f4bd"}.ion-ios-time:before{content:"\f4bf"}.ion-ios-timer:before{content:"\f4c1"}.ion-ios-today:before{content:"\f14f"}.ion-ios-train:before{content:"\f258"}.ion-ios-transgender:before{content:"\f259"}.ion-ios-trash:before{content:"\f4c5"}.ion-ios-trending-down:before{content:"\f25a"}.ion-ios-trending-up:before{content:"\f25b"}.ion-ios-trophy:before{content:"\f25d"}.ion-ios-tv:before{content:"\f115"}.ion-ios-umbrella:before{content:"\f25f"}.ion-ios-undo:before{content:"\f4c7"}.ion-ios-unlock:before{content:"\f261"}.ion-ios-videocam:before{content:"\f4cd"}.ion-ios-volume-high:before{content:"\f11c"}.ion-ios-volume-low:before{content:"\f11e"}.ion-ios-volume-mute:before{content:"\f263"}.ion-ios-volume-off:before{content:"\f264"}.ion-ios-walk:before{content:"\f266"}.ion-ios-wallet:before{content:"\f18b"}.ion-ios-warning:before{content:"\f268"}.ion-ios-watch:before{content:"\f269"}.ion-ios-water:before{content:"\f26b"}.ion-ios-wifi:before{content:"\f26d"}.ion-ios-wine:before{content:"\f26f"}.ion-ios-woman:before{content:"\f271"}.ion-logo-android:before{content:"\f225"}.ion-logo-angular:before{content:"\f227"}.ion-logo-apple:before{content:"\f229"}.ion-logo-bitbucket:before{content:"\f193"}.ion-logo-bitcoin:before{content:"\f22b"}.ion-logo-buffer:before{content:"\f22d"}.ion-logo-chrome:before{content:"\f22f"}.ion-logo-closed-captioning:before{content:"\f105"}.ion-logo-codepen:before{content:"\f230"}.ion-logo-css3:before{content:"\f231"}.ion-logo-designernews:before{content:"\f232"}.ion-logo-dribbble:before{content:"\f233"}.ion-logo-dropbox:before{content:"\f234"}.ion-logo-euro:before{content:"\f235"}.ion-logo-facebook:before{content:"\f236"}.ion-logo-flickr:before{content:"\f107"}.ion-logo-foursquare:before{content:"\f237"}.ion-logo-freebsd-devil:before{content:"\f238"}.ion-logo-game-controller-a:before{content:"\f13b"}.ion-logo-game-controller-b:before{content:"\f181"}.ion-logo-github:before{content:"\f239"}.ion-logo-google:before{content:"\f23a"}.ion-logo-googleplus:before{content:"\f23b"}.ion-logo-hackernews:before{content:"\f23c"}.ion-logo-html5:before{content:"\f23d"}.ion-logo-instagram:before{content:"\f23e"}.ion-logo-ionic:before{content:"\f150"}.ion-logo-ionitron:before{content:"\f151"}.ion-logo-javascript:before{content:"\f23f"}.ion-logo-linkedin:before{content:"\f240"}.ion-logo-markdown:before{content:"\f241"}.ion-logo-model-s:before{content:"\f153"}.ion-logo-no-smoking:before{content:"\f109"}.ion-logo-nodejs:before{content:"\f242"}.ion-logo-npm:before{content:"\f195"}.ion-logo-octocat:before{content:"\f243"}.ion-logo-pinterest:before{content:"\f244"}.ion-logo-playstation:before{content:"\f245"}.ion-logo-polymer:before{content:"\f15e"}.ion-logo-python:before{content:"\f246"}.ion-logo-reddit:before{content:"\f247"}.ion-logo-rss:before{content:"\f248"}.ion-logo-sass:before{content:"\f249"}.ion-logo-skype:before{content:"\f24a"}.ion-logo-slack:before{content:"\f10b"}.ion-logo-snapchat:before{content:"\f24b"}.ion-logo-steam:before{content:"\f24c"}.ion-logo-tumblr:before{content:"\f24d"}.ion-logo-tux:before{content:"\f2ae"}.ion-logo-twitch:before{content:"\f2af"}.ion-logo-twitter:before{content:"\f2b0"}.ion-logo-usd:before{content:"\f2b1"}.ion-logo-vimeo:before{content:"\f2c4"}.ion-logo-vk:before{content:"\f10d"}.ion-logo-whatsapp:before{content:"\f2c5"}.ion-logo-windows:before{content:"\f32f"}.ion-logo-wordpress:before{content:"\f330"}.ion-logo-xbox:before{content:"\f34c"}.ion-logo-xing:before{content:"\f10f"}.ion-logo-yahoo:before{content:"\f34d"}.ion-logo-yen:before{content:"\f34e"}.ion-logo-youtube:before{content:"\f34f"}.ion-md-add:before{content:"\f273"}.ion-md-add-circle:before{content:"\f272"}.ion-md-add-circle-outline:before{content:"\f158"}.ion-md-airplane:before{content:"\f15a"}.ion-md-alarm:before{content:"\f274"}.ion-md-albums:before{content:"\f275"}.ion-md-alert:before{content:"\f276"}.ion-md-american-football:before{content:"\f277"}.ion-md-analytics:before{content:"\f278"}.ion-md-aperture:before{content:"\f279"}.ion-md-apps:before{content:"\f27a"}.ion-md-appstore:before{content:"\f27b"}.ion-md-archive:before{content:"\f27c"}.ion-md-arrow-back:before{content:"\f27d"}.ion-md-arrow-down:before{content:"\f27e"}.ion-md-arrow-dropdown:before{content:"\f280"}.ion-md-arrow-dropdown-circle:before{content:"\f27f"}.ion-md-arrow-dropleft:before{content:"\f282"}.ion-md-arrow-dropleft-circle:before{content:"\f281"}.ion-md-arrow-dropright:before{content:"\f284"}.ion-md-arrow-dropright-circle:before{content:"\f283"}.ion-md-arrow-dropup:before{content:"\f286"}.ion-md-arrow-dropup-circle:before{content:"\f285"}.ion-md-arrow-forward:before{content:"\f287"}.ion-md-arrow-round-back:before{content:"\f288"}.ion-md-arrow-round-down:before{content:"\f289"}.ion-md-arrow-round-forward:before{content:"\f28a"}.ion-md-arrow-round-up:before{content:"\f28b"}.ion-md-arrow-up:before{content:"\f28c"}.ion-md-at:before{content:"\f28d"}.ion-md-attach:before{content:"\f28e"}.ion-md-backspace:before{content:"\f28f"}.ion-md-barcode:before{content:"\f290"}.ion-md-baseball:before{content:"\f291"}.ion-md-basket:before{content:"\f292"}.ion-md-basketball:before{content:"\f293"}.ion-md-battery-charging:before{content:"\f294"}.ion-md-battery-dead:before{content:"\f295"}.ion-md-battery-full:before{content:"\f296"}.ion-md-beaker:before{content:"\f297"}.ion-md-bed:before{content:"\f160"}.ion-md-beer:before{content:"\f298"}.ion-md-bicycle:before{content:"\f299"}.ion-md-bluetooth:before{content:"\f29a"}.ion-md-boat:before{content:"\f29b"}.ion-md-body:before{content:"\f29c"}.ion-md-bonfire:before{content:"\f29d"}.ion-md-book:before{content:"\f29e"}.ion-md-bookmark:before{content:"\f29f"}.ion-md-bookmarks:before{content:"\f2a0"}.ion-md-bowtie:before{content:"\f2a1"}.ion-md-briefcase:before{content:"\f2a2"}.ion-md-browsers:before{content:"\f2a3"}.ion-md-brush:before{content:"\f2a4"}.ion-md-bug:before{content:"\f2a5"}.ion-md-build:before{content:"\f2a6"}.ion-md-bulb:before{content:"\f2a7"}.ion-md-bus:before{content:"\f2a8"}.ion-md-business:before{content:"\f1a4"}.ion-md-cafe:before{content:"\f2a9"}.ion-md-calculator:before{content:"\f2aa"}.ion-md-calendar:before{content:"\f2ab"}.ion-md-call:before{content:"\f2ac"}.ion-md-camera:before{content:"\f2ad"}.ion-md-car:before{content:"\f2b2"}.ion-md-card:before{content:"\f2b3"}.ion-md-cart:before{content:"\f2b4"}.ion-md-cash:before{content:"\f2b5"}.ion-md-cellular:before{content:"\f164"}.ion-md-chatboxes:before{content:"\f2b6"}.ion-md-chatbubbles:before{content:"\f2b7"}.ion-md-checkbox:before{content:"\f2b9"}.ion-md-checkbox-outline:before{content:"\f2b8"}.ion-md-checkmark:before{content:"\f2bc"}.ion-md-checkmark-circle:before{content:"\f2bb"}.ion-md-checkmark-circle-outline:before{content:"\f2ba"}.ion-md-clipboard:before{content:"\f2bd"}.ion-md-clock:before{content:"\f2be"}.ion-md-close:before{content:"\f2c0"}.ion-md-close-circle:before{content:"\f2bf"}.ion-md-close-circle-outline:before{content:"\f166"}.ion-md-cloud:before{content:"\f2c9"}.ion-md-cloud-circle:before{content:"\f2c2"}.ion-md-cloud-done:before{content:"\f2c3"}.ion-md-cloud-download:before{content:"\f2c6"}.ion-md-cloud-outline:before{content:"\f2c7"}.ion-md-cloud-upload:before{content:"\f2c8"}.ion-md-cloudy:before{content:"\f2cb"}.ion-md-cloudy-night:before{content:"\f2ca"}.ion-md-code:before{content:"\f2ce"}.ion-md-code-download:before{content:"\f2cc"}.ion-md-code-working:before{content:"\f2cd"}.ion-md-cog:before{content:"\f2cf"}.ion-md-color-fill:before{content:"\f2d0"}.ion-md-color-filter:before{content:"\f2d1"}.ion-md-color-palette:before{content:"\f2d2"}.ion-md-color-wand:before{content:"\f2d3"}.ion-md-compass:before{content:"\f2d4"}.ion-md-construct:before{content:"\f2d5"}.ion-md-contact:before{content:"\f2d6"}.ion-md-contacts:before{content:"\f2d7"}.ion-md-contract:before{content:"\f2d8"}.ion-md-contrast:before{content:"\f2d9"}.ion-md-copy:before{content:"\f2da"}.ion-md-create:before{content:"\f2db"}.ion-md-crop:before{content:"\f2dc"}.ion-md-cube:before{content:"\f2dd"}.ion-md-cut:before{content:"\f2de"}.ion-md-desktop:before{content:"\f2df"}.ion-md-disc:before{content:"\f2e0"}.ion-md-document:before{content:"\f2e1"}.ion-md-done-all:before{content:"\f2e2"}.ion-md-download:before{content:"\f2e3"}.ion-md-easel:before{content:"\f2e4"}.ion-md-egg:before{content:"\f2e5"}.ion-md-exit:before{content:"\f2e6"}.ion-md-expand:before{content:"\f2e7"}.ion-md-eye:before{content:"\f2e9"}.ion-md-eye-off:before{content:"\f2e8"}.ion-md-fastforward:before{content:"\f2ea"}.ion-md-female:before{content:"\f2eb"}.ion-md-filing:before{content:"\f2ec"}.ion-md-film:before{content:"\f2ed"}.ion-md-finger-print:before{content:"\f2ee"}.ion-md-fitness:before{content:"\f1ac"}.ion-md-flag:before{content:"\f2ef"}.ion-md-flame:before{content:"\f2f0"}.ion-md-flash:before{content:"\f2f1"}.ion-md-flash-off:before{content:"\f169"}.ion-md-flashlight:before{content:"\f16b"}.ion-md-flask:before{content:"\f2f2"}.ion-md-flower:before{content:"\f2f3"}.ion-md-folder:before{content:"\f2f5"}.ion-md-folder-open:before{content:"\f2f4"}.ion-md-football:before{content:"\f2f6"}.ion-md-funnel:before{content:"\f2f7"}.ion-md-gift:before{content:"\f199"}.ion-md-git-branch:before{content:"\f2fa"}.ion-md-git-commit:before{content:"\f2fb"}.ion-md-git-compare:before{content:"\f2fc"}.ion-md-git-merge:before{content:"\f2fd"}.ion-md-git-network:before{content:"\f2fe"}.ion-md-git-pull-request:before{content:"\f2ff"}.ion-md-glasses:before{content:"\f300"}.ion-md-globe:before{content:"\f301"}.ion-md-grid:before{content:"\f302"}.ion-md-hammer:before{content:"\f303"}.ion-md-hand:before{content:"\f304"}.ion-md-happy:before{content:"\f305"}.ion-md-headset:before{content:"\f306"}.ion-md-heart:before{content:"\f308"}.ion-md-heart-dislike:before{content:"\f167"}.ion-md-heart-empty:before{content:"\f1a1"}.ion-md-heart-half:before{content:"\f1a2"}.ion-md-help:before{content:"\f30b"}.ion-md-help-buoy:before{content:"\f309"}.ion-md-help-circle:before{content:"\f30a"}.ion-md-help-circle-outline:before{content:"\f16d"}.ion-md-home:before{content:"\f30c"}.ion-md-hourglass:before{content:"\f111"}.ion-md-ice-cream:before{content:"\f30d"}.ion-md-image:before{content:"\f30e"}.ion-md-images:before{content:"\f30f"}.ion-md-infinite:before{content:"\f310"}.ion-md-information:before{content:"\f312"}.ion-md-information-circle:before{content:"\f311"}.ion-md-information-circle-outline:before{content:"\f16f"}.ion-md-jet:before{content:"\f315"}.ion-md-journal:before{content:"\f18d"}.ion-md-key:before{content:"\f316"}.ion-md-keypad:before{content:"\f317"}.ion-md-laptop:before{content:"\f318"}.ion-md-leaf:before{content:"\f319"}.ion-md-link:before{content:"\f22e"}.ion-md-list:before{content:"\f31b"}.ion-md-list-box:before{content:"\f31a"}.ion-md-locate:before{content:"\f31c"}.ion-md-lock:before{content:"\f31d"}.ion-md-log-in:before{content:"\f31e"}.ion-md-log-out:before{content:"\f31f"}.ion-md-magnet:before{content:"\f320"}.ion-md-mail:before{content:"\f322"}.ion-md-mail-open:before{content:"\f321"}.ion-md-mail-unread:before{content:"\f172"}.ion-md-male:before{content:"\f323"}.ion-md-man:before{content:"\f324"}.ion-md-map:before{content:"\f325"}.ion-md-medal:before{content:"\f326"}.ion-md-medical:before{content:"\f327"}.ion-md-medkit:before{content:"\f328"}.ion-md-megaphone:before{content:"\f329"}.ion-md-menu:before{content:"\f32a"}.ion-md-mic:before{content:"\f32c"}.ion-md-mic-off:before{content:"\f32b"}.ion-md-microphone:before{content:"\f32d"}.ion-md-moon:before{content:"\f32e"}.ion-md-more:before{content:"\f1c9"}.ion-md-move:before{content:"\f331"}.ion-md-musical-note:before{content:"\f332"}.ion-md-musical-notes:before{content:"\f333"}.ion-md-navigate:before{content:"\f334"}.ion-md-notifications:before{content:"\f338"}.ion-md-notifications-off:before{content:"\f336"}.ion-md-notifications-outline:before{content:"\f337"}.ion-md-nuclear:before{content:"\f339"}.ion-md-nutrition:before{content:"\f33a"}.ion-md-open:before{content:"\f33b"}.ion-md-options:before{content:"\f33c"}.ion-md-outlet:before{content:"\f33d"}.ion-md-paper:before{content:"\f33f"}.ion-md-paper-plane:before{content:"\f33e"}.ion-md-partly-sunny:before{content:"\f340"}.ion-md-pause:before{content:"\f341"}.ion-md-paw:before{content:"\f342"}.ion-md-people:before{content:"\f343"}.ion-md-person:before{content:"\f345"}.ion-md-person-add:before{content:"\f344"}.ion-md-phone-landscape:before{content:"\f346"}.ion-md-phone-portrait:before{content:"\f347"}.ion-md-photos:before{content:"\f348"}.ion-md-pie:before{content:"\f349"}.ion-md-pin:before{content:"\f34a"}.ion-md-pint:before{content:"\f34b"}.ion-md-pizza:before{content:"\f354"}.ion-md-plane:before{content:"\f355"}.ion-md-planet:before{content:"\f356"}.ion-md-play:before{content:"\f357"}.ion-md-play-circle:before{content:"\f174"}.ion-md-podium:before{content:"\f358"}.ion-md-power:before{content:"\f359"}.ion-md-pricetag:before{content:"\f35a"}.ion-md-pricetags:before{content:"\f35b"}.ion-md-print:before{content:"\f35c"}.ion-md-pulse:before{content:"\f35d"}.ion-md-qr-scanner:before{content:"\f35e"}.ion-md-quote:before{content:"\f35f"}.ion-md-radio:before{content:"\f362"}.ion-md-radio-button-off:before{content:"\f360"}.ion-md-radio-button-on:before{content:"\f361"}.ion-md-rainy:before{content:"\f363"}.ion-md-recording:before{content:"\f364"}.ion-md-redo:before{content:"\f365"}.ion-md-refresh:before{content:"\f366"}.ion-md-refresh-circle:before{content:"\f228"}.ion-md-remove:before{content:"\f368"}.ion-md-remove-circle:before{content:"\f367"}.ion-md-remove-circle-outline:before{content:"\f176"}.ion-md-reorder:before{content:"\f369"}.ion-md-repeat:before{content:"\f36a"}.ion-md-resize:before{content:"\f36b"}.ion-md-restaurant:before{content:"\f36c"}.ion-md-return-left:before{content:"\f36d"}.ion-md-return-right:before{content:"\f36e"}.ion-md-reverse-camera:before{content:"\f36f"}.ion-md-rewind:before{content:"\f370"}.ion-md-ribbon:before{content:"\f371"}.ion-md-rocket:before{content:"\f179"}.ion-md-rose:before{content:"\f372"}.ion-md-sad:before{content:"\f373"}.ion-md-save:before{content:"\f1a9"}.ion-md-school:before{content:"\f374"}.ion-md-search:before{content:"\f375"}.ion-md-send:before{content:"\f376"}.ion-md-settings:before{content:"\f377"}.ion-md-share:before{content:"\f379"}.ion-md-share-alt:before{content:"\f378"}.ion-md-shirt:before{content:"\f37a"}.ion-md-shuffle:before{content:"\f37b"}.ion-md-skip-backward:before{content:"\f37c"}.ion-md-skip-forward:before{content:"\f37d"}.ion-md-snow:before{content:"\f37e"}.ion-md-speedometer:before{content:"\f37f"}.ion-md-square:before{content:"\f381"}.ion-md-square-outline:before{content:"\f380"}.ion-md-star:before{content:"\f384"}.ion-md-star-half:before{content:"\f382"}.ion-md-star-outline:before{content:"\f383"}.ion-md-stats:before{content:"\f385"}.ion-md-stopwatch:before{content:"\f386"}.ion-md-subway:before{content:"\f387"}.ion-md-sunny:before{content:"\f388"}.ion-md-swap:before{content:"\f389"}.ion-md-switch:before{content:"\f38a"}.ion-md-sync:before{content:"\f38b"}.ion-md-tablet-landscape:before{content:"\f38c"}.ion-md-tablet-portrait:before{content:"\f38d"}.ion-md-tennisball:before{content:"\f38e"}.ion-md-text:before{content:"\f38f"}.ion-md-thermometer:before{content:"\f390"}.ion-md-thumbs-down:before{content:"\f391"}.ion-md-thumbs-up:before{content:"\f392"}.ion-md-thunderstorm:before{content:"\f393"}.ion-md-time:before{content:"\f394"}.ion-md-timer:before{content:"\f395"}.ion-md-today:before{content:"\f17d"}.ion-md-train:before{content:"\f396"}.ion-md-transgender:before{content:"\f397"}.ion-md-trash:before{content:"\f398"}.ion-md-trending-down:before{content:"\f399"}.ion-md-trending-up:before{content:"\f39a"}.ion-md-trophy:before{content:"\f39b"}.ion-md-tv:before{content:"\f17f"}.ion-md-umbrella:before{content:"\f39c"}.ion-md-undo:before{content:"\f39d"}.ion-md-unlock:before{content:"\f39e"}.ion-md-videocam:before{content:"\f39f"}.ion-md-volume-high:before{content:"\f123"}.ion-md-volume-low:before{content:"\f131"}.ion-md-volume-mute:before{content:"\f3a1"}.ion-md-volume-off:before{content:"\f3a2"}.ion-md-walk:before{content:"\f3a4"}.ion-md-wallet:before{content:"\f18f"}.ion-md-warning:before{content:"\f3a5"}.ion-md-watch:before{content:"\f3a6"}.ion-md-water:before{content:"\f3a7"}.ion-md-wifi:before{content:"\f3a8"}.ion-md-wine:before{content:"\f3a9"}.ion-md-woman:before{content:"\f3aa"}
</style>




<footer class="footer-10">
    <div class="container">
        <div class="row mb-5 pb-3 no-gutters">
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-1 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-call"></span>
                        </div>
                        <div class="text">
                            <span>(+33) 1234 5678</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-2 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-mail"></span>
                        </div>
                        <div class="text">
                            <span><a href="" class="__cf_email__" >guideKlai@klay.fr</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-md-0 mb-4 d-flex">
                <div class="con con-3 w-100 py-5">
                    <div class="con-info w-100 text-center">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="ion-ios-pin"></span>
                        </div>
                        <div class="text">
                            <span>2 Rue du Doyen Gabriel Marty, 31000 Toulouse</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">About</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="d-block">Out story</a></li>
                            <li><a href="#" class="d-block">Awards</a></li>
                            <li><a href="#" class="d-block">Our Team</a></li>
                            <li><a href="#" class="d-block">Career</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Company</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="d-block">Our services</a></li>
                            <li><a href="#" class="d-block">Clients</a></li>
                            <li><a href="#" class="d-block">Contact</a></li>
                            <li><a href="#" class="d-block">Press</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4 mb-md-0 mb-4">
                        <h2 class="footer-heading">Resources</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="d-block">Blog</a></li>
                            <li><a href="#" class="d-block">Newsletter</a></li>
                            <li><a href="#" class="d-block">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-5 mb-md-0 mb-4">
                <h2 class="footer-heading">Subscribe</h2>
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                        <button type="submit" class="form-control submit rounded-right">Subscribe</button>
                    </div>
                    <span class="subheading">Get digital marketing updates in your mailbox</span>
                </form>
            </div>
        </div>
        <div class="row mt-5 pt-4 border-top">
            <div class="col-md-6 col-lg-8 mb-md-0 mb-4">
                <p class="copyright mb-0">
                    Copyright &copy;<script data-cfasync="false" src=""></script><script>document.write(new Date().getFullYear());</script> All rights reserved. | This template is made with <i class="ion-ios-heart" aria-hidden="true"></i> by <a href="https://klaiguide.com" target="_blank">klaiguides.com</a>
                </p>
            </div>
            <div class="col-md-6 col-lg-4 text-md-right">
                <ul class="ftco-footer-social p-0">
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span class="ion-logo-twitter"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span class="ion-logo-facebook"></span></a></li>
                    <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span class="ion-logo-instagram"></span></a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

