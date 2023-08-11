<?php
/**
 * Custom share buttons
 *
 * @package WP-rock
 */

$i_d = get_the_ID();
$post_link = get_permalink( $i_d );
$post_title = get_the_title( $i_d );

?>
<div class="single-share-links <?php echo esc_attr( $args['type'] ); ?>">
    <div class="single-share-links__container">
        <a href="https://linkedin.com/shareArticle?url=<?php echo esc_url( $post_link ); ?>&title=<?php echo esc_html( $post_title ); ?>" class="single-share-links__share" target="_blank" rel="noopener noreferrer nofollow">
            <svg width="20" height="19" viewBox="0 0 20 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4.16396 2.08302C4.16369 2.6352 3.94407 3.16465 3.55343 3.5549C3.16278 3.94515 2.63312 4.16424 2.08094 4.16396C1.52876 4.16369 0.999314 3.94407 0.609062 3.55343C0.21881 3.16278 -0.000275827 2.63312 2.60624e-07 2.08094C0.000276348 1.52876 0.219892 0.999314 0.610534 0.609062C1.00118 0.21881 1.53085 -0.000275827 2.08302 2.60624e-07C2.6352 0.000276348 3.16465 0.219892 3.5549 0.610534C3.94515 1.00118 4.16424 1.53085 4.16396 2.08302ZM4.22642 5.70567H0.0624596V18.7389H4.22642V5.70567ZM10.8055 5.70567H6.66234V18.7389H10.7638V11.8996C10.7638 8.08954 15.7294 7.7356 15.7294 11.8996V18.7389H19.8413V10.4838C19.8413 4.0609 12.4919 4.30033 10.7638 7.45453L10.8055 5.70567Z" fill="#B8B8B8"/>
            </svg>
        </a>
        <a href="https://www.facebook.com/sharer.php?u=<?php echo esc_url( $post_link ); ?>" class="single-share-links__share" target="_blank" rel="noopener noreferrer nofollow">
            <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M10.6194 11.1859L11.2089 7.58693H7.52409V5.25144C7.52409 4.26702 8.03865 3.30685 9.68909 3.30685H11.3641V0.242995C11.3641 0.242995 9.84425 0 8.39075 0C5.35645 0 3.37314 1.72396 3.37314 4.84437V7.58755H0V11.1865H3.37314V19.8871H7.52409V11.1865L10.6194 11.1859Z" fill="#B8B8B8"/>
            </svg>
        </a>
        <a href="https://twitter.com/share?url=<?php echo esc_url( $post_link ); ?>" class="single-share-links__share" target="_blank" rel="noopener noreferrer nofollow">
            <svg width="22" height="19" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.0004 2.76365C21.2181 3.12608 20.3778 3.37097 19.4944 3.48166C20.4059 2.91136 21.0879 2.01377 21.413 0.956371C20.5566 1.48826 19.6193 1.86265 18.6418 2.06327C17.9845 1.32945 17.1139 0.843062 16.1651 0.679621C15.2164 0.516181 14.2425 0.68483 13.3948 1.15939C12.5471 1.63394 11.873 2.38785 11.477 3.30407C11.0811 4.22029 10.9855 5.24755 11.2052 6.22637C9.46988 6.13526 7.77227 5.66366 6.22254 4.84216C4.67282 4.02067 3.30561 2.86764 2.20966 1.4579C1.83492 2.13379 1.61945 2.91744 1.61945 3.75202C1.61903 4.50333 1.79598 5.24313 2.1346 5.90579C2.47322 6.56845 2.96303 7.13347 3.56058 7.55072C2.86758 7.52767 2.18987 7.33187 1.58385 6.97964V7.03842C1.58378 8.09216 1.93239 9.11348 2.57051 9.92907C3.20864 10.7447 4.09699 11.3043 5.08482 11.513C4.44195 11.6949 3.76794 11.7217 3.11371 11.5914C3.39242 12.4981 3.93532 13.2909 4.6664 13.859C5.39748 14.427 6.28015 14.7418 7.19084 14.7593C5.6449 16.0282 3.73567 16.7165 1.77028 16.7135C1.42213 16.7136 1.07428 16.6923 0.728516 16.6498C2.72349 17.991 5.04579 18.7028 7.41755 18.7C15.4463 18.7 19.8354 11.7471 19.8354 5.717C19.8354 5.52109 19.8307 5.32322 19.8223 5.12731C20.676 4.48176 21.4129 3.68236 21.9985 2.76658L22.0004 2.76365Z" fill="#B8B8B8"/>
            </svg>
        </a>
        <button class="single-share-links__share" data-role="copy-to-clickboard" type="button">
            <svg width="17" height="18" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.3013 11.3655C15.0265 11.3655 16.4191 12.7646 16.4191 14.4977C16.4191 16.2309 15.0265 17.63 13.3013 17.63C11.5761 17.63 10.1835 16.2309 10.1835 14.4977C10.1835 14.2472 10.2147 14.0175 10.2771 13.7773L5.7251 11.376C5.1535 12.0129 4.34288 12.4096 3.42833 12.4096C1.70316 12.4096 0.310547 11.0105 0.310547 9.27738C0.310547 7.54422 1.70316 6.14517 3.42833 6.14517C4.34288 6.14517 5.1535 6.55236 5.7251 7.1788L10.2771 4.77743C10.2147 4.5373 10.1835 4.3076 10.1835 4.05702C10.1835 2.32386 11.5761 0.924805 13.3013 0.924805C15.0265 0.924805 16.4191 2.32386 16.4191 4.05702C16.4191 5.79018 15.0265 7.18924 13.3013 7.18924C12.3868 7.18924 11.5761 6.78205 11.0045 6.15561L6.45258 8.55698C6.57845 9.02892 6.57845 9.52585 6.45258 9.99779L11.0045 12.3992C11.5761 11.7623 12.3868 11.3655 13.3013 11.3655Z" fill="#B8B8B8"/>
            </svg>
        </button>
        <div class="copy-text"><?php esc_html_e( 'URL copied!', 'wp-rock' ); ?></div>
    </div>
</div>
