<style>
@import url(font-awesome.min.css);
@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Raleway:400,800,900");

/*
	Future Imperfect by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

/* Reset */

	html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, img, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, b, u, i, center, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td, article, aside, canvas, details, embed, figure, figcaption, footer, header, hgroup, menu, nav, output, ruby, section, summary, time, mark, audio, video {
		margin: 0;
		padding: 0;
		border: 0;
		font-size: 100%;
		font: inherit;
		vertical-align: baseline;
	}

	article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section {
		display: block;
	}

	body {
		line-height: 1;
	}

	ol, ul {
		list-style: none;
	}

	blockquote, q {
		quotes: none;
	}

	blockquote:before, blockquote:after, q:before, q:after {
		content: '';
		content: none;
	}

	table {
		border-collapse: collapse;
		border-spacing: 0;
	}

	body {
		-webkit-text-size-adjust: none;
	}

/* Box Model */

	*, *:before, *:after {
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

/* Grid */

	.row {
		border-bottom: solid 1px transparent;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row > * {
		float: left;
		-moz-box-sizing: border-box;
		-webkit-box-sizing: border-box;
		box-sizing: border-box;
	}

	.row:after, .row:before {
		content: '';
		display: block;
		clear: both;
		height: 0;
	}

	.row.uniform > * > :first-child {
		margin-top: 0;
	}

	.row.uniform > * > :last-child {
		margin-bottom: 0;
	}

	.row.\30 \25 > * {
		padding: 0 0 0 0em;
	}

	.row.\30 \25 {
		margin: 0 0 -1px 0em;
	}

	.row.uniform.\30 \25 > * {
		padding: 0em 0 0 0em;
	}

	.row.uniform.\30 \25 {
		margin: 0em 0 -1px 0em;
	}

	.row > * {
		padding: 0 0 0 1em;
	}

	.row {
		margin: 0 0 -1px -1em;
	}

	.row.uniform > * {
		padding: 1em 0 0 1em;
	}

	.row.uniform {
		margin: -1em 0 -1px -1em;
	}

	.row.\32 00\25 > * {
		padding: 0 0 0 2em;
	}

	.row.\32 00\25 {
		margin: 0 0 -1px -2em;
	}

	.row.uniform.\32 00\25 > * {
		padding: 2em 0 0 2em;
	}

	.row.uniform.\32 00\25 {
		margin: -2em 0 -1px -2em;
	}

	.row.\31 50\25 > * {
		padding: 0 0 0 1.5em;
	}

	.row.\31 50\25 {
		margin: 0 0 -1px -1.5em;
	}

	.row.uniform.\31 50\25 > * {
		padding: 1.5em 0 0 1.5em;
	}

	.row.uniform.\31 50\25 {
		margin: -1.5em 0 -1px -1.5em;
	}

	.row.\35 0\25 > * {
		padding: 0 0 0 0.5em;
	}

	.row.\35 0\25 {
		margin: 0 0 -1px -0.5em;
	}

	.row.uniform.\35 0\25 > * {
		padding: 0.5em 0 0 0.5em;
	}

	.row.uniform.\35 0\25 {
		margin: -0.5em 0 -1px -0.5em;
	}

	.row.\32 5\25 > * {
		padding: 0 0 0 0.25em;
	}

	.row.\32 5\25 {
		margin: 0 0 -1px -0.25em;
	}

	.row.uniform.\32 5\25 > * {
		padding: 0.25em 0 0 0.25em;
	}

	.row.uniform.\32 5\25 {
		margin: -0.25em 0 -1px -0.25em;
	}

	.\31 2u, .\31 2u\24 {
		width: 100%;
		clear: none;
		margin-left: 0;
	}

	.\31 1u, .\31 1u\24 {
		width: 91.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 0u, .\31 0u\24 {
		width: 83.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\39 u, .\39 u\24 {
		width: 75%;
		clear: none;
		margin-left: 0;
	}

	.\38 u, .\38 u\24 {
		width: 66.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\37 u, .\37 u\24 {
		width: 58.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\36 u, .\36 u\24 {
		width: 50%;
		clear: none;
		margin-left: 0;
	}

	.\35 u, .\35 u\24 {
		width: 41.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\34 u, .\34 u\24 {
		width: 33.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\33 u, .\33 u\24 {
		width: 25%;
		clear: none;
		margin-left: 0;
	}

	.\32 u, .\32 u\24 {
		width: 16.6666666667%;
		clear: none;
		margin-left: 0;
	}

	.\31 u, .\31 u\24 {
		width: 8.3333333333%;
		clear: none;
		margin-left: 0;
	}

	.\31 2u\24 + *,
	.\31 1u\24 + *,
	.\31 0u\24 + *,
	.\39 u\24 + *,
	.\38 u\24 + *,
	.\37 u\24 + *,
	.\36 u\24 + *,
	.\35 u\24 + *,
	.\34 u\24 + *,
	.\33 u\24 + *,
	.\32 u\24 + *,
	.\31 u\24 + * {
		clear: left;
	}

	.\-11u {
		margin-left: 91.66667%;
	}

	.\-10u {
		margin-left: 83.33333%;
	}

	.\-9u {
		margin-left: 75%;
	}

	.\-8u {
		margin-left: 66.66667%;
	}

	.\-7u {
		margin-left: 58.33333%;
	}

	.\-6u {
		margin-left: 50%;
	}

	.\-5u {
		margin-left: 41.66667%;
	}

	.\-4u {
		margin-left: 33.33333%;
	}

	.\-3u {
		margin-left: 25%;
	}

	.\-2u {
		margin-left: 16.66667%;
	}

	.\-1u {
		margin-left: 8.33333%;
	}

	@media screen and (max-width: 1680px) {

		.row > * {
			padding: 0 0 0 1em;
		}

		.row {
			margin: 0 0 -1px -1em;
		}

		.row.uniform > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform.\32 00\25 {
			margin: -2em 0 -1px -2em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.5em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.25em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.25em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.25em 0 0 0.25em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.25em 0 -1px -0.25em;
		}

		.\31 2u\28xlarge\29, .\31 2u\24\28xlarge\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xlarge\29, .\31 1u\24\28xlarge\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xlarge\29, .\31 0u\24\28xlarge\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xlarge\29, .\39 u\24\28xlarge\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xlarge\29, .\38 u\24\28xlarge\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xlarge\29, .\37 u\24\28xlarge\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xlarge\29, .\36 u\24\28xlarge\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xlarge\29, .\35 u\24\28xlarge\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xlarge\29, .\34 u\24\28xlarge\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xlarge\29, .\33 u\24\28xlarge\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xlarge\29, .\32 u\24\28xlarge\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xlarge\29, .\31 u\24\28xlarge\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xlarge\29 + *,
		.\31 1u\24\28xlarge\29 + *,
		.\31 0u\24\28xlarge\29 + *,
		.\39 u\24\28xlarge\29 + *,
		.\38 u\24\28xlarge\29 + *,
		.\37 u\24\28xlarge\29 + *,
		.\36 u\24\28xlarge\29 + *,
		.\35 u\24\28xlarge\29 + *,
		.\34 u\24\28xlarge\29 + *,
		.\33 u\24\28xlarge\29 + *,
		.\32 u\24\28xlarge\29 + *,
		.\31 u\24\28xlarge\29 + * {
			clear: left;
		}

		.\-11u\28xlarge\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xlarge\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xlarge\29 {
			margin-left: 75%;
		}

		.\-8u\28xlarge\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xlarge\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xlarge\29 {
			margin-left: 50%;
		}

		.\-5u\28xlarge\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xlarge\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xlarge\29 {
			margin-left: 25%;
		}

		.\-2u\28xlarge\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xlarge\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 1280px) {

		.row > * {
			padding: 0 0 0 1em;
		}

		.row {
			margin: 0 0 -1px -1em;
		}

		.row.uniform > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform.\32 00\25 {
			margin: -2em 0 -1px -2em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.5em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.25em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.25em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.25em 0 0 0.25em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.25em 0 -1px -0.25em;
		}

		.\31 2u\28large\29, .\31 2u\24\28large\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28large\29, .\31 1u\24\28large\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28large\29, .\31 0u\24\28large\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28large\29, .\39 u\24\28large\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28large\29, .\38 u\24\28large\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28large\29, .\37 u\24\28large\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28large\29, .\36 u\24\28large\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28large\29, .\35 u\24\28large\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28large\29, .\34 u\24\28large\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28large\29, .\33 u\24\28large\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28large\29, .\32 u\24\28large\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28large\29, .\31 u\24\28large\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28large\29 + *,
		.\31 1u\24\28large\29 + *,
		.\31 0u\24\28large\29 + *,
		.\39 u\24\28large\29 + *,
		.\38 u\24\28large\29 + *,
		.\37 u\24\28large\29 + *,
		.\36 u\24\28large\29 + *,
		.\35 u\24\28large\29 + *,
		.\34 u\24\28large\29 + *,
		.\33 u\24\28large\29 + *,
		.\32 u\24\28large\29 + *,
		.\31 u\24\28large\29 + * {
			clear: left;
		}

		.\-11u\28large\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28large\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28large\29 {
			margin-left: 75%;
		}

		.\-8u\28large\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28large\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28large\29 {
			margin-left: 50%;
		}

		.\-5u\28large\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28large\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28large\29 {
			margin-left: 25%;
		}

		.\-2u\28large\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28large\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 980px) {

		.row > * {
			padding: 0 0 0 1em;
		}

		.row {
			margin: 0 0 -1px -1em;
		}

		.row.uniform > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform.\32 00\25 {
			margin: -2em 0 -1px -2em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.5em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.25em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.25em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.25em 0 0 0.25em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.25em 0 -1px -0.25em;
		}

		.\31 2u\28medium\29, .\31 2u\24\28medium\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28medium\29, .\31 1u\24\28medium\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28medium\29, .\31 0u\24\28medium\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28medium\29, .\39 u\24\28medium\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28medium\29, .\38 u\24\28medium\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28medium\29, .\37 u\24\28medium\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28medium\29, .\36 u\24\28medium\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28medium\29, .\35 u\24\28medium\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28medium\29, .\34 u\24\28medium\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28medium\29, .\33 u\24\28medium\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28medium\29, .\32 u\24\28medium\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28medium\29, .\31 u\24\28medium\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28medium\29 + *,
		.\31 1u\24\28medium\29 + *,
		.\31 0u\24\28medium\29 + *,
		.\39 u\24\28medium\29 + *,
		.\38 u\24\28medium\29 + *,
		.\37 u\24\28medium\29 + *,
		.\36 u\24\28medium\29 + *,
		.\35 u\24\28medium\29 + *,
		.\34 u\24\28medium\29 + *,
		.\33 u\24\28medium\29 + *,
		.\32 u\24\28medium\29 + *,
		.\31 u\24\28medium\29 + * {
			clear: left;
		}

		.\-11u\28medium\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28medium\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28medium\29 {
			margin-left: 75%;
		}

		.\-8u\28medium\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28medium\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28medium\29 {
			margin-left: 50%;
		}

		.\-5u\28medium\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28medium\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28medium\29 {
			margin-left: 25%;
		}

		.\-2u\28medium\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28medium\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 736px) {

		.row > * {
			padding: 0 0 0 1em;
		}

		.row {
			margin: 0 0 -1px -1em;
		}

		.row.uniform > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform.\32 00\25 {
			margin: -2em 0 -1px -2em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.5em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.25em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.25em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.25em 0 0 0.25em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.25em 0 -1px -0.25em;
		}

		.\31 2u\28small\29, .\31 2u\24\28small\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28small\29, .\31 1u\24\28small\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28small\29, .\31 0u\24\28small\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28small\29, .\39 u\24\28small\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28small\29, .\38 u\24\28small\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28small\29, .\37 u\24\28small\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28small\29, .\36 u\24\28small\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28small\29, .\35 u\24\28small\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28small\29, .\34 u\24\28small\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28small\29, .\33 u\24\28small\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28small\29, .\32 u\24\28small\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28small\29, .\31 u\24\28small\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28small\29 + *,
		.\31 1u\24\28small\29 + *,
		.\31 0u\24\28small\29 + *,
		.\39 u\24\28small\29 + *,
		.\38 u\24\28small\29 + *,
		.\37 u\24\28small\29 + *,
		.\36 u\24\28small\29 + *,
		.\35 u\24\28small\29 + *,
		.\34 u\24\28small\29 + *,
		.\33 u\24\28small\29 + *,
		.\32 u\24\28small\29 + *,
		.\31 u\24\28small\29 + * {
			clear: left;
		}

		.\-11u\28small\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28small\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28small\29 {
			margin-left: 75%;
		}

		.\-8u\28small\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28small\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28small\29 {
			margin-left: 50%;
		}

		.\-5u\28small\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28small\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28small\29 {
			margin-left: 25%;
		}

		.\-2u\28small\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28small\29 {
			margin-left: 8.33333%;
		}

	}

	@media screen and (max-width: 480px) {

		.row > * {
			padding: 0 0 0 1em;
		}

		.row {
			margin: 0 0 -1px -1em;
		}

		.row.uniform > * {
			padding: 1em 0 0 1em;
		}

		.row.uniform {
			margin: -1em 0 -1px -1em;
		}

		.row.\32 00\25 > * {
			padding: 0 0 0 2em;
		}

		.row.\32 00\25 {
			margin: 0 0 -1px -2em;
		}

		.row.uniform.\32 00\25 > * {
			padding: 2em 0 0 2em;
		}

		.row.uniform.\32 00\25 {
			margin: -2em 0 -1px -2em;
		}

		.row.\31 50\25 > * {
			padding: 0 0 0 1.5em;
		}

		.row.\31 50\25 {
			margin: 0 0 -1px -1.5em;
		}

		.row.uniform.\31 50\25 > * {
			padding: 1.5em 0 0 1.5em;
		}

		.row.uniform.\31 50\25 {
			margin: -1.5em 0 -1px -1.5em;
		}

		.row.\35 0\25 > * {
			padding: 0 0 0 0.5em;
		}

		.row.\35 0\25 {
			margin: 0 0 -1px -0.5em;
		}

		.row.uniform.\35 0\25 > * {
			padding: 0.5em 0 0 0.5em;
		}

		.row.uniform.\35 0\25 {
			margin: -0.5em 0 -1px -0.5em;
		}

		.row.\32 5\25 > * {
			padding: 0 0 0 0.25em;
		}

		.row.\32 5\25 {
			margin: 0 0 -1px -0.25em;
		}

		.row.uniform.\32 5\25 > * {
			padding: 0.25em 0 0 0.25em;
		}

		.row.uniform.\32 5\25 {
			margin: -0.25em 0 -1px -0.25em;
		}

		.\31 2u\28xsmall\29, .\31 2u\24\28xsmall\29 {
			width: 100%;
			clear: none;
			margin-left: 0;
		}

		.\31 1u\28xsmall\29, .\31 1u\24\28xsmall\29 {
			width: 91.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 0u\28xsmall\29, .\31 0u\24\28xsmall\29 {
			width: 83.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\39 u\28xsmall\29, .\39 u\24\28xsmall\29 {
			width: 75%;
			clear: none;
			margin-left: 0;
		}

		.\38 u\28xsmall\29, .\38 u\24\28xsmall\29 {
			width: 66.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\37 u\28xsmall\29, .\37 u\24\28xsmall\29 {
			width: 58.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\36 u\28xsmall\29, .\36 u\24\28xsmall\29 {
			width: 50%;
			clear: none;
			margin-left: 0;
		}

		.\35 u\28xsmall\29, .\35 u\24\28xsmall\29 {
			width: 41.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\34 u\28xsmall\29, .\34 u\24\28xsmall\29 {
			width: 33.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\33 u\28xsmall\29, .\33 u\24\28xsmall\29 {
			width: 25%;
			clear: none;
			margin-left: 0;
		}

		.\32 u\28xsmall\29, .\32 u\24\28xsmall\29 {
			width: 16.6666666667%;
			clear: none;
			margin-left: 0;
		}

		.\31 u\28xsmall\29, .\31 u\24\28xsmall\29 {
			width: 8.3333333333%;
			clear: none;
			margin-left: 0;
		}

		.\31 2u\24\28xsmall\29 + *,
		.\31 1u\24\28xsmall\29 + *,
		.\31 0u\24\28xsmall\29 + *,
		.\39 u\24\28xsmall\29 + *,
		.\38 u\24\28xsmall\29 + *,
		.\37 u\24\28xsmall\29 + *,
		.\36 u\24\28xsmall\29 + *,
		.\35 u\24\28xsmall\29 + *,
		.\34 u\24\28xsmall\29 + *,
		.\33 u\24\28xsmall\29 + *,
		.\32 u\24\28xsmall\29 + *,
		.\31 u\24\28xsmall\29 + * {
			clear: left;
		}

		.\-11u\28xsmall\29 {
			margin-left: 91.66667%;
		}

		.\-10u\28xsmall\29 {
			margin-left: 83.33333%;
		}

		.\-9u\28xsmall\29 {
			margin-left: 75%;
		}

		.\-8u\28xsmall\29 {
			margin-left: 66.66667%;
		}

		.\-7u\28xsmall\29 {
			margin-left: 58.33333%;
		}

		.\-6u\28xsmall\29 {
			margin-left: 50%;
		}

		.\-5u\28xsmall\29 {
			margin-left: 41.66667%;
		}

		.\-4u\28xsmall\29 {
			margin-left: 33.33333%;
		}

		.\-3u\28xsmall\29 {
			margin-left: 25%;
		}

		.\-2u\28xsmall\29 {
			margin-left: 16.66667%;
		}

		.\-1u\28xsmall\29 {
			margin-left: 8.33333%;
		}

	}

/* Basic */

	@-ms-viewport {
		width: device-width;
	}

	body {
		-ms-overflow-style: scrollbar;
	}

	@media screen and (max-width: 480px) {

		html, body {
			min-width: 320px;
		}

	}

	body {
		background: #f4f4f4;
	}

		body.is-loading *, body.is-loading *:before, body.is-loading *:after {
			-moz-animation: none !important;
			-webkit-animation: none !important;
			-ms-animation: none !important;
			animation: none !important;
			-moz-transition: none !important;
			-webkit-transition: none !important;
			-ms-transition: none !important;
			transition: none !important;
		}

/* Type */

	body, input, select, textarea {
		color: #646464;
		font-family: "Source Sans Pro", Helvetica, sans-serif;
		font-size: 14pt;
		font-weight: 400;
		line-height: 1.75;
	}

		@media screen and (max-width: 1680px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 1280px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 980px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 736px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 480px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

	a {
		-moz-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		-webkit-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		-ms-transition: color 0.2s ease, border-bottom-color 0.2s ease;
		transition: color 0.2s ease, border-bottom-color 0.2s ease;
		border-bottom: dotted 1px rgba(160, 160, 160, 0.65);
		color: inherit;
		text-decoration: none;
	}

		a:before {
			-moz-transition: color 0.2s ease;
			-webkit-transition: color 0.2s ease;
			-ms-transition: color 0.2s ease;
			transition: color 0.2s ease;
		}

		a:hover {
			border-bottom-color: transparent;
			color: #2ebaae !important;
		}

			a:hover:before {
				color: #2ebaae !important;
			}

	strong, b {
		color: #3c3b3b;
		font-weight: 700;
	}

	em, i {
		font-style: italic;
	}

	p {
		margin: 0 0 2em 0;
	}

	h1, h2, h3, h4, h5, h6 {
		color: #3c3b3b;
		font-family: "Raleway", Helvetica, sans-serif;
		font-weight: 800;
		letter-spacing: 0.25em;
		line-height: 1.65;
		margin: 0 0 1em 0;
		text-transform: uppercase;
	}

		h1 a, h2 a, h3 a, h4 a, h5 a, h6 a {
			color: inherit;
			border-bottom: 0;
		}

	h2 {
		font-size: 1.1em;
	}

	h3 {
		font-size: 0.9em;
	}

	h4 {
		font-size: 0.7em;
	}

	h5 {
		font-size: 0.7em;
	}

	h6 {
		font-size: 0.7em;
	}

	sub {
		font-size: 0.8em;
		position: relative;
		top: 0.5em;
	}

	sup {
		font-size: 0.8em;
		position: relative;
		top: -0.5em;
	}

	blockquote {
		border-left: solid 4px rgba(160, 160, 160, 0.3);
		font-style: italic;
		margin: 0 0 2em 0;
		padding: 0.5em 0 0.5em 2em;
	}

	code {
		background: rgba(160, 160, 160, 0.075);
		border: solid 1px rgba(160, 160, 160, 0.3);
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0.25em;
		padding: 0.25em 0.65em;
	}

	pre {
		-webkit-overflow-scrolling: touch;
		font-family: "Courier New", monospace;
		font-size: 0.9em;
		margin: 0 0 2em 0;
	}

		pre code {
			display: block;
			line-height: 1.75em;
			padding: 1em 1.5em;
			overflow-x: auto;
		}

	hr {
		border: 0;
		border-bottom: solid 1px rgba(160, 160, 160, 0.3);
		margin: 2em 0;
	}

		hr.major {
			margin: 3em 0;
		}

	.align-left {
		text-align: left;
	}

	.align-center {
		text-align: center;
	}

	.align-right {
		text-align: right;
	}

/* Author */

	.author {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: row;
		-webkit-flex-direction: row;
		-ms-flex-direction: row;
		flex-direction: row;
		-moz-align-items: center;
		-webkit-align-items: center;
		-ms-align-items: center;
		align-items: center;
		-moz-justify-content: -moz-flex-end;
		-webkit-justify-content: -webkit-flex-end;
		-ms-justify-content: -ms-flex-end;
		justify-content: flex-end;
		border-bottom: 0;
		font-family: "Raleway", Helvetica, sans-serif;
		font-size: 0.6em;
		font-weight: 400;
		letter-spacing: 0.25em;
		text-transform: uppercase;
		white-space: nowrap;
	}

		.author .name {
			-moz-transition: border-bottom-color 0.2s ease;
			-webkit-transition: border-bottom-color 0.2s ease;
			-ms-transition: border-bottom-color 0.2s ease;
			transition: border-bottom-color 0.2s ease;
			border-bottom: dotted 1px rgba(160, 160, 160, 0.65);
			display: block;
			margin: 0 1.5em 0 0;
		}

		.author img {
			border-radius: 100%;
			display: block;
			width: 4em;
		}

		.author:hover .name {
			border-bottom-color: transparent;
		}

/* Blurb */

	.blurb h2 {
		font-size: 0.8em;
		margin: 0 0 1.5em 0;
	}

	.blurb h3 {
		font-size: 0.7em;
	}

	.blurb p {
		font-size: 0.9em;
	}

/* Box */

	.box {
		border: solid 1px rgba(160, 160, 160, 0.3);
		margin-bottom: 2em;
		padding: 1.5em;
	}

		.box > :last-child,
		.box > :last-child > :last-child,
		.box > :last-child > :last-child > :last-child {
			margin-bottom: 0;
		}

		.box.alt {
			border: 0;
			border-radius: 0;
			padding: 0;
		}

/* Button */

	input[type="submit"],
	input[type="reset"],
	input[type="button"],
	button,
	.button {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		-moz-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
		-webkit-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
		-ms-transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
		transition: background-color 0.2s ease, box-shadow 0.2s ease, color 0.2s ease;
		background-color: transparent;
		border: 0;
		box-shadow: inset 0 0 0 1px rgba(160, 160, 160, 0.3);
		color: #3c3b3b !important;
		cursor: pointer;
		display: inline-block;
		font-family: "Raleway", Helvetica, sans-serif;
		font-size: 0.6em;
		font-weight: 800;
		height: 4.8125em;
		letter-spacing: 0.25em;
		line-height: 4.8125em;
		padding: 0 2.5em;
		text-align: center;
		text-decoration: none;
		text-transform: uppercase;
		white-space: nowrap;
	}

		input[type="submit"]:hover,
		input[type="reset"]:hover,
		input[type="button"]:hover,
		button:hover,
		.button:hover {
			box-shadow: inset 0 0 0 1px #2ebaae;
			color: #2ebaae !important;
		}

			input[type="submit"]:hover:active,
			input[type="reset"]:hover:active,
			input[type="button"]:hover:active,
			button:hover:active,
			.button:hover:active {
				background-color: rgba(46, 186, 174, 0.05);
			}

		input[type="submit"]:before, input[type="submit"]:after,
		input[type="reset"]:before,
		input[type="reset"]:after,
		input[type="button"]:before,
		input[type="button"]:after,
		button:before,
		button:after,
		.button:before,
		.button:after {
			color: #aaaaaa;
			position: relative;
		}

		input[type="submit"]:before,
		input[type="reset"]:before,
		input[type="button"]:before,
		button:before,
		.button:before {
			left: -1em;
			padding: 0 0 0 0.75em;
		}

		input[type="submit"]:after,
		input[type="reset"]:after,
		input[type="button"]:after,
		button:after,
		.button:after {
			left: 1em;
			padding: 0 0.75em 0 0;
		}

		input[type="submit"].fit,
		input[type="reset"].fit,
		input[type="button"].fit,
		button.fit,
		.button.fit {
			display: block;
			margin: 0 0 1em 0;
			width: 100%;
		}

		input[type="submit"].big,
		input[type="reset"].big,
		input[type="button"].big,
		button.big,
		.button.big {
			font-size: 0.7em;
			padding: 0 3em;
		}

		input[type="submit"].small,
		input[type="reset"].small,
		input[type="button"].small,
		button.small,
		.button.small {
			font-size: 0.5em;
		}

		input[type="submit"].disabled, input[type="submit"]:disabled,
		input[type="reset"].disabled,
		input[type="reset"]:disabled,
		input[type="button"].disabled,
		input[type="button"]:disabled,
		button.disabled,
		button:disabled,
		.button.disabled,
		.button:disabled {
			-moz-pointer-events: none;
			-webkit-pointer-events: none;
			-ms-pointer-events: none;
			pointer-events: none;
			color: rgba(160, 160, 160, 0.3) !important;
		}

			input[type="submit"].disabled:before, input[type="submit"]:disabled:before,
			input[type="reset"].disabled:before,
			input[type="reset"]:disabled:before,
			input[type="button"].disabled:before,
			input[type="button"]:disabled:before,
			button.disabled:before,
			button:disabled:before,
			.button.disabled:before,
			.button:disabled:before {
				color: rgba(160, 160, 160, 0.3) !important;
			}

/* Form */

	form {
		margin: 0 0 2em 0;
	}

		form.search {
			text-decoration: none;
			position: relative;
		}

			form.search:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			form.search:before {
				color: #aaaaaa;
				content: '\f002';
				display: block;
				height: 2.75em;
				left: 0;
				line-height: 2.75em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 2.5em;
			}

			form.search > input:first-child {
				padding-left: 2.5em;
			}

	label {
		color: #3c3b3b;
		display: block;
		font-size: 0.9em;
		font-weight: 700;
		margin: 0 0 1em 0;
	}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	input[type="tel"],
	select,
	textarea {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		background: rgba(160, 160, 160, 0.075);
		border: none;
		border: solid 1px rgba(160, 160, 160, 0.3);
		border-radius: 0;
		color: inherit;
		display: block;
		outline: 0;
		padding: 0 1em;
		text-decoration: none;
		width: 100%;
	}

		input[type="text"]:invalid,
		input[type="password"]:invalid,
		input[type="email"]:invalid,
		input[type="tel"]:invalid,
		select:invalid,
		textarea:invalid {
			box-shadow: none;
		}

		input[type="text"]:focus,
		input[type="password"]:focus,
		input[type="email"]:focus,
		input[type="tel"]:focus,
		select:focus,
		textarea:focus {
			border-color: #2ebaae;
			box-shadow: inset 0 0 0 1px #2ebaae;
		}

	.select-wrapper {
		text-decoration: none;
		display: block;
		position: relative;
	}

		.select-wrapper:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.select-wrapper:before {
			color: rgba(160, 160, 160, 0.3);
			content: '\f078';
			display: block;
			height: 2.75em;
			line-height: 2.75em;
			pointer-events: none;
			position: absolute;
			right: 0;
			text-align: center;
			top: 0;
			width: 2.75em;
		}

		.select-wrapper select::-ms-expand {
			display: none;
		}

	input[type="text"],
	input[type="password"],
	input[type="email"],
	select {
		height: 2.75em;
	}

	textarea {
		padding: 0.75em 1em;
	}

	input[type="checkbox"],
	input[type="radio"] {
		-moz-appearance: none;
		-webkit-appearance: none;
		-ms-appearance: none;
		appearance: none;
		display: block;
		float: left;
		margin-right: -2em;
		opacity: 0;
		width: 1em;
		z-index: -1;
	}

		input[type="checkbox"] + label,
		input[type="radio"] + label {
			text-decoration: none;
			color: #646464;
			cursor: pointer;
			display: inline-block;
			font-size: 1em;
			font-weight: 400;
			padding-left: 2.4em;
			padding-right: 0.75em;
			position: relative;
		}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				-moz-osx-font-smoothing: grayscale;
				-webkit-font-smoothing: antialiased;
				font-family: FontAwesome;
				font-style: normal;
				font-weight: normal;
				text-transform: none !important;
			}

			input[type="checkbox"] + label:before,
			input[type="radio"] + label:before {
				background: rgba(160, 160, 160, 0.075);
				border: solid 1px rgba(160, 160, 160, 0.3);
				content: '';
				display: inline-block;
				height: 1.65em;
				left: 0;
				line-height: 1.58125em;
				position: absolute;
				text-align: center;
				top: 0;
				width: 1.65em;
			}

		input[type="checkbox"]:checked + label:before,
		input[type="radio"]:checked + label:before {
			background: #3c3b3b;
			border-color: #3c3b3b;
			color: #ffffff;
			content: '\f00c';
		}

		input[type="checkbox"]:focus + label:before,
		input[type="radio"]:focus + label:before {
			border-color: #2ebaae;
			box-shadow: 0 0 0 1px #2ebaae;
		}

	input[type="radio"] + label:before {
		border-radius: 100%;
	}

	::-webkit-input-placeholder {
		color: #aaaaaa !important;
		opacity: 1.0;
	}

	:-moz-placeholder {
		color: #aaaaaa !important;
		opacity: 1.0;
	}

	::-moz-placeholder {
		color: #aaaaaa !important;
		opacity: 1.0;
	}

	:-ms-input-placeholder {
		color: #aaaaaa !important;
		opacity: 1.0;
	}

	.formerize-placeholder {
		color: #aaaaaa !important;
		opacity: 1.0;
	}

/* Icon */

	.icon {
		text-decoration: none;
		border-bottom: none;
		position: relative;
	}

		.icon:before {
			-moz-osx-font-smoothing: grayscale;
			-webkit-font-smoothing: antialiased;
			font-family: FontAwesome;
			font-style: normal;
			font-weight: normal;
			text-transform: none !important;
		}

		.icon > .label {
			display: none;
		}

		.icon.suffix:before {
			float: right;
		}

/* Image */

	.image {
		border: 0;
		display: inline-block;
		position: relative;
	}

		.image img {
			display: block;
		}

		.image.left, .image.right {
			max-width: 40%;
		}

			.image.left img, .image.right img {
				width: 100%;
			}

		.image.left {
			float: left;
			padding: 0 1.5em 1em 0;
			top: 0.25em;
		}

		.image.right {
			float: right;
			padding: 0 0 1em 1.5em;
			top: 0.25em;
		}

		.image.fit {
			display: block;
			margin: 0 0 2em 0;
			width: 100%;
		}

			.image.fit img {
				width: 100%;
			}

		.image.featured {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.featured img {
				width: 100%;
			}

			@media screen and (max-width: 736px) {

				.image.featured {
					margin: 0 0 1.5em 0;
				}

			}

		.image.main {
			display: block;
			margin: 0 0 3em 0;
			width: 100%;
		}

			.image.main img {
				width: 100%;
			}

/* List */

	ol {
		list-style: decimal;
		margin: 0 0 2em 0;
		padding-left: 1.25em;
	}

		ol li {
			padding-left: 0.25em;
		}

	ul {
		list-style: disc;
		margin: 0 0 2em 0;
		padding-left: 1em;
	}

		ul li {
			padding-left: 0.5em;
		}

		ul.alt {
			list-style: none;
			padding-left: 0;
		}

			ul.alt li {
				border-top: solid 1px rgba(160, 160, 160, 0.3);
				padding: 0.5em 0;
			}

				ul.alt li:first-child {
					border-top: 0;
					padding-top: 0;
				}

		ul.icons {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.icons li {
				display: inline-block;
				padding: 0 1em 0 0;
			}

				ul.icons li:last-child {
					padding-right: 0;
				}

				ul.icons li > * {
					text-decoration: none;
					border: 0;
				}

					ul.icons li > *:before {
						-moz-osx-font-smoothing: grayscale;
						-webkit-font-smoothing: antialiased;
						font-family: FontAwesome;
						font-style: normal;
						font-weight: normal;
						text-transform: none !important;
					}

					ul.icons li > * .label {
						display: none;
					}

		ul.actions {
			cursor: default;
			list-style: none;
			padding-left: 0;
		}

			ul.actions li {
				display: inline-block;
				padding: 0 1.5em 0 0;
				vertical-align: middle;
			}

				ul.actions li:last-child {
					padding-right: 0;
				}

			ul.actions.pagination .next {
				text-decoration: none;
			}

				ul.actions.pagination .next:after {
					content: "";
					-moz-osx-font-smoothing: grayscale;
					-webkit-font-smoothing: antialiased;
					font-family: FontAwesome;
					font-style: normal;
					font-weight: normal;
					text-transform: none !important;
				}

				ul.actions.pagination .next:after {
					content: '\f054';
				}

			ul.actions.pagination .previous {
				text-decoration: none;
			}

				ul.actions.pagination .previous:before {
					content: "";
					-moz-osx-font-smoothing: grayscale;
					-webkit-font-smoothing: antialiased;
					font-family: FontAwesome;
					font-style: normal;
					font-weight: normal;
					text-transform: none !important;
				}

				ul.actions.pagination .previous:before {
					content: '\f053';
				}

			@media screen and (max-width: 1280px) {

				ul.actions.pagination {
					text-align: center;
				}

					ul.actions.pagination .next, ul.actions.pagination .previous {
						min-width: 20em;
					}

			}

			@media screen and (max-width: 736px) {

				ul.actions.pagination .next, ul.actions.pagination .previous {
					min-width: 18em;
				}

			}

			ul.actions.small li {
				padding: 0 1em 0 0;
			}

			ul.actions.vertical li {
				display: block;
				padding: 1.5em 0 0 0;
			}

				ul.actions.vertical li:first-child {
					padding-top: 0;
				}

				ul.actions.vertical li > * {
					margin-bottom: 0;
				}

			ul.actions.vertical.small li {
				padding: 1em 0 0 0;
			}

				ul.actions.vertical.small li:first-child {
					padding-top: 0;
				}

			ul.actions.fit {
				display: table;
				margin-left: -1em;
				padding: 0;
				table-layout: fixed;
				width: calc(100% + 1em);
			}

				ul.actions.fit li {
					display: table-cell;
					padding: 0 0 0 1em;
				}

					ul.actions.fit li > * {
						margin-bottom: 0;
					}

				ul.actions.fit.small {
					margin-left: -0.5em;
					width: calc(100% + 0.5em);
				}

					ul.actions.fit.small li {
						padding: 0 0 0 0.5em;
					}

			@media screen and (max-width: 480px) {

				ul.actions {
					margin: 0 0 2em 0;
				}

					ul.actions li {
						padding: 1em 0 0 0;
						display: block;
						text-align: center;
						width: 100%;
					}

						ul.actions li:first-child {
							padding-top: 0;
						}

						ul.actions li > * {
							width: 100%;
							margin: 0 !important;
						}

					ul.actions.small li {
						padding: 0.5em 0 0 0;
					}

						ul.actions.small li:first-child {
							padding-top: 0;
						}

			}

		ul.posts {
			list-style: none;
			padding: 0;
		}

			ul.posts li {
				border-top: dotted 1px rgba(160, 160, 160, 0.3);
				margin: 1.5em 0 0 0;
				padding: 1.5em 0 0 0;
			}

				ul.posts li:first-child {
					border-top: 0;
					margin-top: 0;
					padding-top: 0;
				}

			ul.posts article {
				display: -moz-flex;
				display: -webkit-flex;
				display: -ms-flex;
				display: flex;
				-moz-align-items: -moz-flex-start;
				-webkit-align-items: -webkit-flex-start;
				-ms-align-items: -ms-flex-start;
				align-items: flex-start;
				-moz-flex-direction: row-reverse;
				-webkit-flex-direction: row-reverse;
				-ms-flex-direction: row-reverse;
				flex-direction: row-reverse;
			}

				ul.posts article .image {
					display: block;
					margin-right: 1.5em;
					min-width: 4em;
					width: 4em;
				}

					ul.posts article .image img {
						width: 100%;
						border-radius: 50%;
					}

				ul.posts article header {
					-moz-flex-grow: 1;
					-webkit-flex-grow: 1;
					-ms-flex-grow: 1;
					flex-grow: 1;
					-ms-flex: 1;
				}

					ul.posts article header h3 {
						font-size: 0.7em;
						margin-top: 0.125em;
					}

					ul.posts article header .published {
						display: block;
						font-family: "Raleway", Helvetica, sans-serif;
						font-size: 0.6em;
						font-weight: 400;
						letter-spacing: 0.25em;
						margin: -0.625em 0 1.7em 0;
						text-transform: uppercase;
					}

					ul.posts article header > :last-child {
						margin-bottom: 0;
					}

	dl {
		margin: 0 0 2em 0;
	}

		dl dt {
			display: block;
			font-weight: 700;
			margin: 0 0 1em 0;
		}

		dl dd {
			margin-left: 2em;
		}

/* Mini Post */

	.mini-post {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: column-reverse;
		-webkit-flex-direction: column-reverse;
		-ms-flex-direction: column-reverse;
		flex-direction: column-reverse;
		background: #ffffff;
		border: solid 1px rgba(160, 160, 160, 0.3);
		margin: 0 0 2em 0;
	}

		.mini-post .image {
			overflow: hidden;
			width: 100%;
		}

			.mini-post .image img {
				-moz-transition: -moz-transform 0.2s ease-out;
				-webkit-transition: -webkit-transform 0.2s ease-out;
				-ms-transition: -ms-transform 0.2s ease-out;
				transition: transform 0.2s ease-out;
				width: 100%;
			}

			.mini-post .image:hover img {
				-moz-transform: scale(1.05);
				-webkit-transform: scale(1.05);
				-ms-transform: scale(1.05);
				transform: scale(1.05);
			}

		.mini-post header {
			padding: 1.25em 4.25em 0.1em 1.25em ;
			min-height: 4em;
			position: relative;
			-moz-flex-grow: 1;
			-webkit-flex-grow: 1;
			-ms-flex-grow: 1;
			flex-grow: 1;
		}

			.mini-post header h3 {
				font-size: 0.7em;
			}

			.mini-post header .published {
				display: block;
				font-family: "Raleway", Helvetica, sans-serif;
				font-size: 0.6em;
				font-weight: 400;
				letter-spacing: 0.25em;
				margin: -0.625em 0 1.7em 0;
				text-transform: uppercase;
			}

			.mini-post header .author {
				position: absolute;
				right: 2em;
				top: 2em;
			}

	.mini-posts {
		margin: 0 0 2em 0;
	}

		@media screen and (max-width: 1280px) {

			.mini-posts {
				display: -moz-flex;
				display: -webkit-flex;
				display: -ms-flex;
				display: flex;
				-moz-flex-wrap: wrap;
				-webkit-flex-wrap: wrap;
				-ms-flex-wrap: wrap;
				flex-wrap: wrap;
				width: calc(100% + 2em);
			}

				.mini-posts > * {
					margin: 2em 2em 0 0;
					width: calc(50% - 2em);
				}

				.mini-posts > :nth-child(-n + 2) {
					margin-top: 0;
				}

		}

		@media screen and (max-width: 480px) {

			.mini-posts {
				display: block;
				width: 100%;
			}

				.mini-posts > * {
					margin: 0 0 2em 0;
					width: 100%;
				}

		}

/* Post */

	.post {
		padding: 3em 3em 1em 3em ;
		background: #ffffff;
		border: solid 1px rgba(160, 160, 160, 0.3);
		margin: 0 0 3em 0;
		position: relative;
	}

		.post > header {
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
			border-bottom: solid 1px rgba(160, 160, 160, 0.3);
			left: -3em;
			margin: -3em 0 3em 0;
			position: relative;
			width: calc(100% + 6em);
		}

			.post > header .title {
				-moz-flex-grow: 1;
				-webkit-flex-grow: 1;
				-ms-flex-grow: 1;
				flex-grow: 1;
				-ms-flex: 1;
				padding: 3.75em 3em 3.3em 3em;
			}

				.post > header .title h2 {
					font-weight: 900;
					font-size: 1.5em;
				}

				.post > header .title > :last-child {
					margin-bottom: 0;
				}

			.post > header .meta {
				padding: 3.75em 3em 1.75em 3em ;
				border-left: solid 1px rgba(160, 160, 160, 0.3);
				min-width: 17em;
				text-align: right;
				width: 17em;
			}

				.post > header .meta > * {
					margin: 0 0 1em 0;
				}

				.post > header .meta > :last-child {
					margin-bottom: 0;
				}

				.post > header .meta .published {
					color: #3c3b3b;
					display: block;
					font-family: "Raleway", Helvetica, sans-serif;
					font-size: 0.7em;
					font-weight: 800;
					letter-spacing: 0.25em;
					margin-top: 0.5em;
					text-transform: uppercase;
					white-space: nowrap;
				}

		.post > a.image.featured {
			overflow: hidden;
		}

			.post > a.image.featured img {
				-moz-transition: -moz-transform 0.2s ease-out;
				-webkit-transition: -webkit-transform 0.2s ease-out;
				-ms-transition: -ms-transform 0.2s ease-out;
				transition: transform 0.2s ease-out;
			}

			.post > a.image.featured:hover img {
				-moz-transform: scale(1.05);
				-webkit-transform: scale(1.05);
				-ms-transform: scale(1.05);
				transform: scale(1.05);
			}

		.post > footer {
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
			-moz-align-items: center;
			-webkit-align-items: center;
			-ms-align-items: center;
			align-items: center;
		}

			.post > footer .actions {
				-moz-flex-grow: 1;
				-webkit-flex-grow: 1;
				-ms-flex-grow: 1;
				flex-grow: 1;
			}

			.post > footer .stats {
				cursor: default;
				list-style: none;
				padding: 0;
			}

				.post > footer .stats li {
					border-left: solid 1px rgba(160, 160, 160, 0.3);
					display: inline-block;
					font-family: "Raleway", Helvetica, sans-serif;
					font-size: 0.6em;
					font-weight: 400;
					letter-spacing: 0.25em;
					line-height: 1;
					margin: 0 0 0 2em;
					padding: 0 0 0 2em;
					text-transform: uppercase;
				}

					.post > footer .stats li:first-child {
						border-left: 0;
						margin-left: 0;
						padding-left: 0;
					}

					.post > footer .stats li .icon {
						border-bottom: 0;
					}

						.post > footer .stats li .icon:before {
							color: rgba(160, 160, 160, 0.3);
							margin-right: 0.75em;
						}

		@media screen and (max-width: 980px) {

			.post {
				border-left: 0;
				border-right: 0;
				left: -3em;
				width: calc(100% + (3em * 2));
			}

				.post > header {
					-moz-flex-direction: column;
					-webkit-flex-direction: column;
					-ms-flex-direction: column;
					flex-direction: column;
					padding: 3.75em 3em 1.25em 3em ;
					border-left: 0;
				}

					.post > header .title {
						-ms-flex: 0 1 auto;
						margin: 0 0 2em 0;
						padding: 0;
						text-align: center;
					}

					.post > header .meta {
						-moz-align-items: center;
						-webkit-align-items: center;
						-ms-align-items: center;
						align-items: center;
						display: -moz-flex;
						display: -webkit-flex;
						display: -ms-flex;
						display: flex;
						-moz-justify-content: center;
						-webkit-justify-content: center;
						-ms-justify-content: center;
						justify-content: center;
						border-left: 0;
						margin: 0 0 2em 0;
						padding-top: 0;
						padding: 0;
						text-align: left;
						width: 100%;
					}

						.post > header .meta > * {
							border-left: solid 1px rgba(160, 160, 160, 0.3);
							margin-left: 2em;
							padding-left: 2em;
						}

						.post > header .meta > :first-child {
							border-left: 0;
							margin-left: 0;
							padding-left: 0;
						}

						.post > header .meta .published {
							margin-bottom: 0;
							margin-top: 0;
						}

						.post > header .meta .author {
							-moz-flex-direction: row-reverse;
							-webkit-flex-direction: row-reverse;
							-ms-flex-direction: row-reverse;
							flex-direction: row-reverse;
							margin-bottom: 0;
						}

							.post > header .meta .author .name {
								margin: 0 0 0 1.5em;
							}

							.post > header .meta .author img {
								width: 3.5em;
							}

		}

		@media screen and (max-width: 736px) {

			.post {
				padding: 1.5em 1.5em 0.1em 1.5em ;
				left: -1.5em;
				margin: 0 0 2em 0;
				width: calc(100% + (1.5em * 2));
			}

				.post > header {
					padding: 3em 1.5em 0.5em 1.5em ;
					left: -1.5em;
					margin: -1.5em 0 1.5em 0;
					width: calc(100% + 3em);
				}

					.post > header .title h2 {
						font-size: 1.1em;
					}

		}

		@media screen and (max-width: 480px) {

			.post > header .meta {
				-moz-align-items: center;
				-webkit-align-items: center;
				-ms-align-items: center;
				align-items: center;
				-moz-flex-direction: column;
				-webkit-flex-direction: column;
				-ms-flex-direction: column;
				flex-direction: column;
			}

				.post > header .meta > * {
					border-left: 0;
					margin: 1em 0 0 0;
					padding-left: 0;
				}

				.post > header .meta .author .name {
					display: none;
				}

			.post > .image.featured {
				margin-left: -1.5em;
				margin-top: calc(-1.5em - 1px);
				width: calc(100% + 3em);
			}

			.post > footer {
				-moz-align-items: stretch;
				-webkit-align-items: stretch;
				-ms-align-items: stretch;
				align-items: stretch;
				-moz-flex-direction: column-reverse;
				-webkit-flex-direction: column-reverse;
				-ms-flex-direction: column-reverse;
				flex-direction: column-reverse;
			}

				.post > footer .stats {
					text-align: center;
				}

					.post > footer .stats li {
						margin: 0 0 0 1.25em;
						padding: 0 0 0 1.25em;
					}

		}

/* Section/Article */

	section.special, article.special {
		text-align: center;
	}

	header p {
		font-family: "Raleway", Helvetica, sans-serif;
		font-size: 0.7em;
		font-weight: 400;
		letter-spacing: 0.25em;
		line-height: 2.5;
		margin-top: -1em;
		text-transform: uppercase;
	}

/* Table */

	.table-wrapper {
		-webkit-overflow-scrolling: touch;
		overflow-x: auto;
	}

	table {
		margin: 0 0 2em 0;
		width: 100%;
	}

		table tbody tr {
			border: solid 1px rgba(160, 160, 160, 0.3);
			border-left: 0;
			border-right: 0;
		}

			table tbody tr:nth-child(2n + 1) {
				background-color: rgba(160, 160, 160, 0.075);
			}

		table td {
			padding: 0.75em 0.75em;
		}

		table th {
			color: #3c3b3b;
			font-size: 0.9em;
			font-weight: 700;
			padding: 0 0.75em 0.75em 0.75em;
			text-align: left;
		}

		table thead {
			border-bottom: solid 2px rgba(160, 160, 160, 0.3);
		}

		table tfoot {
			border-top: solid 2px rgba(160, 160, 160, 0.3);
		}

		table.alt {
			border-collapse: separate;
		}

			table.alt tbody tr td {
				border: solid 1px rgba(160, 160, 160, 0.3);
				border-left-width: 0;
				border-top-width: 0;
			}

				table.alt tbody tr td:first-child {
					border-left-width: 1px;
				}

			table.alt tbody tr:first-child td {
				border-top-width: 1px;
			}

			table.alt thead {
				border-bottom: 0;
			}

			table.alt tfoot {
				border-top: 0;
			}

/* Header */

	body {
		padding-top: 3.5em;
	}

	#header {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-justify-content: space-between;
		-webkit-justify-content: space-between;
		-ms-justify-content: space-between;
		justify-content: space-between;
		background-color: #ffffff;
		border-bottom: solid 1px rgba(160, 160, 160, 0.3);
		height: 3.5em;
		left: 0;
		line-height: 3.5em;
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 10000;
	}

		#header a {
			color: inherit;
			text-decoration: none;
		}

		#header ul {
			list-style: none;
			margin: 0;
			padding-left: 0;
		}

			#header ul li {
				display: inline-block;
				padding-left: 0;
			}

		#header h1 {
			height: inherit;
			line-height: inherit;
			padding: 0 0 0 1.5em;
			white-space: nowrap;
		}

			#header h1 a {
				font-size: 0.7em;
			}

		#header .links {
			-moz-flex: 1;
			-webkit-flex: 1;
			-ms-flex: 1;
			flex: 1;
			border-left: solid 1px rgba(160, 160, 160, 0.3);
			height: inherit;
			line-height: inherit;
			margin-left: 1.5em;
			overflow: hidden;
			padding-left: 1.5em;
		}

			#header .links ul li {
				border-left: solid 1px rgba(160, 160, 160, 0.3);
				line-height: 1;
				margin-left: 1em;
				padding-left: 1em;
			}

				#header .links ul li:first-child {
					border-left: 0;
					margin-left: 0;
					padding-left: 0;
				}

				#header .links ul li a {
					border-bottom: 0;
					font-family: "Raleway", Helvetica, sans-serif;
					font-size: 0.7em;
					font-weight: 400;
					letter-spacing: 0.25em;
					text-transform: uppercase;
				}

		#header .main {
			height: inherit;
			line-height: inherit;
			text-align: right;
		}

			#header .main ul {
				height: inherit;
				line-height: inherit;
			}

				#header .main ul li {
					border-left: solid 1px rgba(160, 160, 160, 0.3);
					height: inherit;
					line-height: inherit;
					white-space: nowrap;
				}

					#header .main ul li > * {
						display: block;
						float: left;
					}

					#header .main ul li > a {
						text-decoration: none;
						border-bottom: 0;
						color: #aaaaaa;
						overflow: hidden;
						position: relative;
						text-indent: 4em;
						width: 4em;
						height: inherit;
					}

					#header .main ul li.user > a {
						text-indent: 0;
						text-align: center;
						position: relative;
					}
					#header .main ul li.user > a img {
						width: 40px;
						height: 40px;
						border-radius: 50%;
						display: inline-block;
						position: absolute;
						top: 50%;
						left: 50%;
						transform: translate(-50%, -50%);
						z-index: 1;
					}

						#header .main ul li > a:before {
							-moz-osx-font-smoothing: grayscale;
							-webkit-font-smoothing: antialiased;
							font-family: FontAwesome;
							font-style: normal;
							font-weight: normal;
							text-transform: none !important;
						}

						#header .main ul li > a:before {
							display: block;
							height: inherit;
							left: 0;
							line-height: inherit;
							position: absolute;
							text-align: center;
							text-indent: 0;
							top: 0;
							width: inherit;
						}

		#header form {
			margin: 0;
		}

			#header form input {
				display: inline-block;
				height: 2.5em;
				position: relative;
				top: -2px;
				vertical-align: middle;
			}

		#header #search {
			-moz-transition: all 0.5s ease;
			-webkit-transition: all 0.5s ease;
			-ms-transition: all 0.5s ease;
			transition: all 0.5s ease;
			max-width: 0;
			opacity: 0;
			overflow: hidden;
			padding: 0;
			white-space: nowrap;
		}

			#header #search input {
				width: 12em;
			}

			#header #search.visible {
				max-width: 12.5em;
				opacity: 1;
				padding: 0 0.5em 0 0;
			}

		@media screen and (max-width: 980px) {

			#header .links {
				display: none;
			}

		}

		@media screen and (max-width: 736px) {

			#header {
				height: 2.75em;
				line-height: 2.75em;
			}

				#header h1 {
					padding: 0 0 0 1em;
				}

				#header .main .search {
					display: none;
				}

		}

/* Wrapper */

	#wrapper {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-direction: row-reverse;
		-webkit-flex-direction: row-reverse;
		-ms-flex-direction: row-reverse;
		flex-direction: row-reverse;
		-moz-transition: opacity 0.5s ease;
		-webkit-transition: opacity 0.5s ease;
		-ms-transition: opacity 0.5s ease;
		transition: opacity 0.5s ease;
		margin: 0 auto;
		max-width: 100%;
		opacity: 1;
		padding: 4.5em;
		width: 90em;
	}

		body.is-menu-visible #wrapper {
			opacity: 0.15;
		}

		@media screen and (max-width: 1680px) {

			#wrapper {
				padding: 3em;
			}

		}

		@media screen and (max-width: 1280px) {

			#wrapper {
				display: block;
			}

		}

		@media screen and (max-width: 736px) {

			#wrapper {
				padding: 1.5em;
			}

		}

		body.single #wrapper {
			display: block;
		}

/* Main */

	#main {
		-moz-flex-grow: 1;
		-webkit-flex-grow: 1;
		-ms-flex-grow: 1;
		flex-grow: 1;
		-ms-flex: 1;
		width: 100%;
	}

/* Sidebar */

	#sidebar {
		margin-right: 3em;
		min-width: 22em;
		width: 22em;
	}

		#sidebar > * {
			border-top: solid 1px rgba(160, 160, 160, 0.3);
			margin: 3em 0 0 0;
			padding: 3em 0 0 0;
		}

		#sidebar > :first-child {
			border-top: 0;
			margin-top: 0;
			padding-top: 0;
		}

		@media screen and (max-width: 1280px) {

			#sidebar {
				border-top: solid 1px rgba(160, 160, 160, 0.3);
				margin: 3em 0 0 0;
				min-width: 0;
				padding: 3em 0 0 0;
				width: 100%;
			}

		}

/* Intro */

	#intro .logo {
		border-bottom: 0;
		display: inline-block;
		margin: 0 0 1em 0;
		overflow: hidden;
		position: relative;
		width: 4em;
	}

		#intro .logo:before {
			background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' width='100px' height='100px' viewBox='0 0 100 100' preserveAspectRatio='none' zoomAndPan='disable'%3E%3Cpolygon points='0,0 100,0 100,25 50,0 0,25' style='fill:%23f4f4f4' /%3E%3Cpolygon points='0,100 100,100 100,75 50,100 0,75' style='fill:%23f4f4f4' /%3E%3C/svg%3E");
			background-position: top left;
			background-repeat: no-repeat;
			background-size: 100% 100%;
			content: '';
			display: block;
			height: 100%;
			left: 0;
			position: absolute;
			top: 0;
			width: 100%;
		}

		#intro .logo img {
			display: block;
			margin-left: -0.25em;
			width: 4.5em;
		}

	#intro header h2 {
		font-size: 2em;
		font-weight: 900;
	}

	#intro header p {
		font-size: 0.8em;
	}

	@media screen and (max-width: 1280px) {

		#intro {
			margin: 0 0 3em 0;
			text-align: center;
		}

			#intro header h2 {
				font-size: 2em;
			}

			#intro header p {
				font-size: 0.7em;
			}

	}

	@media screen and (max-width: 736px) {

		#intro {
			margin: 0 0 1.5em 0;
			padding: 1.25em 0;
		}

			#intro > :last-child {
				margin-bottom: 0;
			}

			#intro .logo {
				margin: 0 0 0.5em 0;
			}

			#intro header h2 {
				font-size: 1.25em;
			}

			#intro header > :last-child {
				margin-bottom: 0;
			}

	}

/* Footer */

	#footer .icons {
		color: #aaaaaa;
	}

	#footer .copyright {
		color: #aaaaaa;
		font-family: "Raleway", Helvetica, sans-serif;
		font-size: 0.5em;
		font-weight: 400;
		letter-spacing: 0.25em;
		text-transform: uppercase;
	}

	body.single #footer {
		text-align: center;
	}

/* Menu */

	#menu {
		-moz-transform: translateX(25em);
		-webkit-transform: translateX(25em);
		-ms-transform: translateX(25em);
		transform: translateX(25em);
		-moz-transition: -moz-transform 0.5s ease, visibility 0.5s;
		-webkit-transition: -webkit-transform 0.5s ease, visibility 0.5s;
		-ms-transition: -ms-transform 0.5s ease, visibility 0.5s;
		transition: transform 0.5s ease, visibility 0.5s;
		-webkit-overflow-scrolling: touch;
		background: #ffffff;
		border-left: solid 1px rgba(160, 160, 160, 0.3);
		box-shadow: none;
		height: 100%;
		max-width: 80%;
		overflow-y: auto;
		position: fixed;
		right: 0;
		top: 0;
		visibility: hidden;
		width: 25em;
		z-index: 10002;
	}

		#menu > * {
			border-top: solid 1px rgba(160, 160, 160, 0.3);
			padding: 3em;
		}

			#menu > * > :last-child {
				margin-bottom: 0;
			}

		#menu > :first-child {
			border-top: 0;
		}

		#menu .links {
			list-style: none;
			padding: 0;
		}

			#menu .links > li {
				border: 0;
				border-top: dotted 1px rgba(160, 160, 160, 0.3);
				margin: 1.5em 0 0 0;
				padding: 1.5em 0 0 0;
			}

				#menu .links > li a {
					display: block;
					border-bottom: 0;
				}

					#menu .links > li a h3 {
						-moz-transition: color 0.2s ease;
						-webkit-transition: color 0.2s ease;
						-ms-transition: color 0.2s ease;
						transition: color 0.2s ease;
						font-size: 0.7em;
					}

					#menu .links > li a p {
						font-family: "Raleway", Helvetica, sans-serif;
						font-size: 0.6em;
						font-weight: 400;
						letter-spacing: 0.25em;
						margin-bottom: 0;
						text-decoration: none;
						text-transform: uppercase;
					}

					#menu .links > li a:hover h3 {
						color: #2ebaae;
					}

				#menu .links > li:first-child {
					border-top: 0;
					margin-top: 0;
					padding-top: 0;
				}

		body.is-menu-visible #menu {
			-moz-transform: translateX(0);
			-webkit-transform: translateX(0);
			-ms-transform: translateX(0);
			transform: translateX(0);
			visibility: visible;
		}

		@media screen and (max-width: 736px) {

			#menu > * {
				padding: 1.5em;
			}

		}

		.comment-autor {
			line-height: 40px;
		}
		.comment-autor a:first-child {
			border: none !important;
			padding-right: 10px;
		}
		.comment-autor a img {
			display: inline-block;
			vertical-align: top;
			width: 40px;
			height: 40px;
			border-radius: 50%;
		}
		.comment p {
			margin-top: 20px;
		}

		.user-avatar img {
			width: 60px;
			height: 60px;
			border-radius: 50%;
		}
	
		.red,
		.fa-heart.liked,
		.fa-heart.liked:before {
			color: #BC412B !important;
		}
        </style>