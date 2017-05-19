<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * phpbb_url_matcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class phpbb_url_matcher extends Symfony\Component\Routing\Matcher\UrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/feed')) {
            // phpbb_feed_forums
            if ($pathinfo === '/feed/forums') {
                return array (  '_controller' => 'phpbb.feed.controller:forums',  '_route' => 'phpbb_feed_forums',);
            }

            // phpbb_feed_news
            if ($pathinfo === '/feed/news') {
                return array (  '_controller' => 'phpbb.feed.controller:news',  '_route' => 'phpbb_feed_news',);
            }

            if (0 === strpos($pathinfo, '/feed/topics')) {
                // phpbb_feed_topics
                if ($pathinfo === '/feed/topics') {
                    return array (  '_controller' => 'phpbb.feed.controller:topics',  '_route' => 'phpbb_feed_topics',);
                }

                if (0 === strpos($pathinfo, '/feed/topics_')) {
                    // phpbb_feed_topics_active
                    if ($pathinfo === '/feed/topics_active') {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_active',  '_route' => 'phpbb_feed_topics_active',);
                    }

                    // phpbb_feed_topics_new
                    if ($pathinfo === '/feed/topics_new') {
                        return array (  '_controller' => 'phpbb.feed.controller:topics_new',  '_route' => 'phpbb_feed_topics_new',);
                    }

                }

            }

            // phpbb_feed_forum
            if (0 === strpos($pathinfo, '/feed/forum') && preg_match('#^/feed/forum/(?P<forum_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_forum')), array (  '_controller' => 'phpbb.feed.controller:forum',));
            }

            // phpbb_feed_topic
            if (0 === strpos($pathinfo, '/feed/topic') && preg_match('#^/feed/topic/(?P<topic_id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_topic')), array (  '_controller' => 'phpbb.feed.controller:topic',));
            }

            // phpbb_feed_overall
            if (preg_match('#^/feed/(?P<mode>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_feed_overall')), array (  '_controller' => 'phpbb.feed.controller:overall',));
            }

            // phpbb_feed_index
            if ($pathinfo === '/feed') {
                return array (  '_controller' => 'phpbb.feed.controller:overall',  '_route' => 'phpbb_feed_index',);
            }

        }

        if (0 === strpos($pathinfo, '/help')) {
            // phpbb_help_bbcode_controller
            if ($pathinfo === '/help/bbcode') {
                return array (  '_controller' => 'phpbb.help.controller.bbcode:handle',  '_route' => 'phpbb_help_bbcode_controller',);
            }

            // phpbb_help_faq_controller
            if ($pathinfo === '/help/faq') {
                return array (  '_controller' => 'phpbb.help.controller.faq:handle',  '_route' => 'phpbb_help_faq_controller',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            // phpbb_report_pm_controller
            if (0 === strpos($pathinfo, '/pm') && preg_match('#^/pm/(?P<id>\\d+)/report$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_pm_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_pm_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'pm',));
            }
            not_phpbb_report_pm_controller:

            // phpbb_report_post_controller
            if (0 === strpos($pathinfo, '/post') && preg_match('#^/post/(?P<id>\\d+)/report$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_phpbb_report_post_controller;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'phpbb_report_post_controller')), array (  '_controller' => 'phpbb.report.controller:handle',  'mode' => 'post',));
            }
            not_phpbb_report_post_controller:

        }

        // paul999_mention_controller
        if ($pathinfo === '/mentionloc') {
            return array (  '_controller' => 'paul999.mention.controller:handle',  '_route' => 'paul999_mention_controller',);
        }

        if (0 === strpos($pathinfo, '/chat')) {
            // spaceace_ajaxchat_popup
            if ($pathinfo === '/chat/popup') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'popup',  '_route' => 'spaceace_ajaxchat_popup',);
            }

            // spaceace_ajaxchat_archive
            if ($pathinfo === '/chat/archive') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'archive',  '_route' => 'spaceace_ajaxchat_archive',);
            }

            // spaceace_ajaxchat_edit
            if (0 === strpos($pathinfo, '/chat/edit') && preg_match('#^/chat/edit/(?P<chat_id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'spaceace_ajaxchat_edit')), array (  '_controller' => 'spaceace.ajaxchat.chat.controller:editAction',));
            }

            // spaceace_ajaxchat_read
            if ($pathinfo === '/chat/read') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:readAction',  '_route' => 'spaceace_ajaxchat_read',);
            }

            // spaceace_ajaxchat_add
            if ($pathinfo === '/chat/add') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:addAction',  '_route' => 'spaceace_ajaxchat_add',);
            }

            // spaceace_ajaxchat_delete
            if ($pathinfo === '/chat/delete') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:delAction',  '_route' => 'spaceace_ajaxchat_delete',);
            }

            // spaceace_ajaxchat_quote
            if ($pathinfo === '/chat/quotemessage') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:chat_quote',  '_route' => 'spaceace_ajaxchat_quote',);
            }

            // spaceace_ajaxchat_chat
            if ($pathinfo === '/chat') {
                return array (  '_controller' => 'spaceace.ajaxchat.chat.controller:defaultAction',  'page' => 'chat',  '_route' => 'spaceace_ajaxchat_chat',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
