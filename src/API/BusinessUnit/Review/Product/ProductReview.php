<?php
namespace IGD\Trustpilot\API\BusinessUnit\Review\Product;

use IGD\Trustpilot\API\Resource;

class ProductReview extends Resource
{
    /**
     * Save the product.
     *
     * @return mixed
     */
    public function save()
    {
        return (new ProductReviewApi())->save([$this->toSaveArray()])[0];
    }

    /**
     * Get the parameters to save.
     *
     * @return array
     */
    private function toSaveArray()
    {
        return [
            'id' => $this->id,
            'createdAt' => $this->createdAt,
            'stars' => $this->stars,
            'content' => $this->content,
            'consumer' => $this->consumer,
            'language' => $this->language,
            'attributeRatings' => $this->attributeRatings,
            'attachments' => $this->attachments
        ];
    }
    // Example response
    /*
    {
        "productReviews": [
            {
            "id": "507f191e810c19729de860ea",
            "createdAt": "2013-09-07T13:37:00",
            "stars": 4,
            "content": "This product was nice, but slightly too soft.",
            "consumer": {
                "id": "507f191e810c19729de860ea",
                "displayName": "John Doe"
            },
            "language": "en",
            "attributeRatings": [
                {
                "attributeId": "attributes.default.quality",
                "attributeName": "Quality",
                "rating": 4
                }
            ],
            "attachments": [
                {
                "id": "507f191e810c19729de860ea",
                "state": "Published",
                "processedFiles": [
                    {
                    "dimension": "1024pxWide",
                    "mimeType": "image/png",
                    "url": "https://productreviews-attachments.trustpilot.com/507f191e810c19729de860ea_1024pxWide.png"
                    }
                ]
                }
            ]
            }
        ],
        "links": [
            {
            "href": "<Url for the resource>",
            "method": "<Http method for the resource>",
            "rel": "<Description of the relation>"
            }
        ]
    }
    */
}
