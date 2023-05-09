export interface product {
    product_name: string
    product_figure_1: string
    product_figure_2?: string
    product_image_alt: string
    product_price: number
    product_sale?: {
        percentage: number
        price_after_sale: number
    }
}
