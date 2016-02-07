# Needs Directory and Map

Helping refugees and asylum seekers to satisfy basic needs, on and after their arrival in Sheffield

## Idea

Often fundamental needs can be very difficult to satisfy, when you don't know the language or culture, and you might have been traumatized by your experiences thus far. Help is meant to be offered when the refugee is housed, but this is often cursory (and usually the emphasis is on telling the refugee what they're not allowed to do - drive, earn money, smoke in the property etc.)

Drop-in centres and voluntary resources can only do so much, and often at certain times of the day or week, so some kind of mobile-first website (possibly leading to an offline app because of PAYG cost limitations) would help to take refugees from an initial stating of a key need to how they can get the results they want, with as much "hand-holding" as possible for various reasons.

## Progress at Sheffugees Hackathon 2012-02-06

* Discussed with stakeholder what the needs were.
* Wireframed designs of several steps in the process, through a decision tree or directory, ending up at either geographical or tip-based results. Key findings:
  * Maslow's hierarchy of needs: start off with "how do I get food / money / back to the house I'm staying in? Home Office offices? Local drop-in location?" then move to more complex/enabling transport (donated cycles, socializing, events etc.) 
  * Sometimes geographical search results needed: can we include something pictographic e.g. Street View? PTSD etc. makes it tough to absorb a lot of info.
  * Sometimes tip / informational results needed (e.g. a post office has a sign like this: ....)
  * Geographical data sets might be available?
* Prototypes:
  * Yandex / translation.
  * GeoJSON files of postcode locations, bus routes.
  * Simple two- or three-tier interface:
    * Foundation SASS to make it pretty.
    * V simplistic Silex/Twig router.

## Next steps

* Obtain data sources either in a big initial push or on a rolling basis.
* Curate data in some kind of management tool (a basic CMS e.g. core Drupal 8 with no frills, exposing resulting data to a separate app via RSS/JSON or something else?)
* Review and expand on possible content (maybe within the CMS context?)
* Think about responsibility for data
* Consider hosting issues etc.
