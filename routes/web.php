<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Main as MainLivewire;

// Tasks
Route::prefix('tasks')->group(function() {

    // Queue
    Route::get('queue', function() {

        Artisan::call('queue:work', ['--stop-when-empty' => true, '--force' => true]);

    });

    // Schedule
    Route::get('schedule', function() {

        Artisan::call('schedule:run');

    });

});

// Main (Livewire)
Route::namespace('App\Http\Livewire\Main')->group(function() {

    // Home
    Route::namespace('Home')->group(function() {
    
        // Home
        Route::get('/', MainLivewire\Home\HomeComponent::class);
    
    });

    // Explore
    Route::namespace('Explore')->prefix('explore')->group(function() {

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function() {

            // Browse projects
            Route::get('/', MainLivewire\Explore\Projects\ProjectsComponent::class);

            // Category
            Route::get('{category_slug}', MainLivewire\Explore\Projects\CategoryComponent::class);

            // Skill
            Route::get('{category_slug}/{skill_slug}', MainLivewire\Explore\Projects\SkillComponent::class);

        });

    });

    // Project
    Route::namespace('Project')->prefix('project')->group(function() {

        // Project
        Route::get('{pid}/{slug}', MainLivewire\Project\ProjectComponent::class);

    });

    // Blog
    Route::namespace('Blog')->prefix('blog')->group(function() {

        // Index
        Route::get('/', MainLivewire\Blog\BlogComponent::class);

        // Article
        Route::get('{slug}', MainLivewire\Blog\ArticleComponent::class);

    });

    // Sellers
    Route::namespace('Sellers')->prefix('sellers')->group(function() {

        // Index
        Route::get('/', MainLivewire\Sellers\SellersComponent::class);

    });

    // Redirect
    Route::namespace('Redirect')->prefix('redirect')->group(function() {

        // To
        Route::get('/', MainLivewire\Redirect\RedirectComponent::class);

    });

    // Newsletter
    Route::namespace('Newsletter')->prefix('newsletter')->group(function() {

        // Verify
        Route::get('verify', MainLivewire\Newsletter\VerifyComponent::class);

    });
    
    // Authentication 
    Route::namespace('Auth')->middleware('guest')->prefix('auth')->group(function() {

        // Register
        Route::get('register', MainLivewire\Auth\RegisterComponent::class);

        // Login
        Route::get('login', MainLivewire\Auth\LoginComponent::class)->name('login');

        // Verify
        Route::get('verify', MainLivewire\Auth\VerifyComponent::class);

        // Request verification
        Route::get('request', MainLivewire\Auth\RequestComponent::class);

        // Password
        Route::namespace('Password')->prefix('password')->group(function() {

            // Reset
            Route::get('reset', MainLivewire\Auth\Password\ResetComponent::class);

            // Update
            Route::get('update', MainLivewire\Auth\Password\UpdateComponent::class);

        });

        // Social media
        Route::namespace('Social')->group(function() {

            // Github
            Route::namespace('Github')->prefix('github')->group(function() {

                // Redirect
                Route::get('/', MainLivewire\Auth\Social\Github\RedirectComponent::class);

                // Callback
                Route::get('callback', MainLivewire\Auth\Social\Github\CallbackComponent::class);

            });

            // Linkedin
            Route::namespace('Linkedin')->prefix('linkedin')->group(function() {

                // Redirect
                Route::get('/', MainLivewire\Auth\Social\Linkedin\RedirectComponent::class);

                // Callback
                Route::get('callback', MainLivewire\Auth\Social\Linkedin\CallbackComponent::class);

            });

            // Google
            Route::namespace('Google')->prefix('google')->group(function() {

                // Redirect
                Route::get('/', MainLivewire\Auth\Social\Google\RedirectComponent::class);

                // Callback
                Route::get('callback', MainLivewire\Auth\Social\Google\CallbackComponent::class);

            });

            // Facebook
            Route::namespace('Facebook')->prefix('facebook')->group(function() {

                // Redirect
                Route::get('/', MainLivewire\Auth\Social\Facebook\RedirectComponent::class);

                // Callback
                Route::get('callback', MainLivewire\Auth\Social\Facebook\CallbackComponent::class);

            });

            // Twitter
            Route::namespace('Twitter')->prefix('twitter')->group(function() {

                // Redirect
                Route::get('/', MainLivewire\Auth\Social\Twitter\RedirectComponent::class);

                // Callback
                Route::get('callback', MainLivewire\Auth\Social\Twitter\CallbackComponent::class);

            });

        });

    });

    // Logout
    Route::namespace('Auth')->middleware('auth')->prefix('auth')->group(function() {

        // Logout
        Route::get('logout', MainLivewire\Auth\LogoutComponent::class);

    });

    // Service
    Route::namespace('Service')->prefix('service')->group(function() {

        // Slug
        Route::get('{slug}', MainLivewire\Service\ServiceComponent::class)->name('service');

    });

    // Cart
    Route::namespace('Cart')->prefix('cart')->group(function() {

        // cart
        Route::get('/', MainLivewire\Cart\CartComponent::class);

    });

    // Checkout
    Route::namespace('Checkout')->prefix('checkout')->middleware('auth')->group(function() {

        // Checkout
        Route::get('/', MainLivewire\Checkout\CheckoutComponent::class);

    });

    // Account
    Route::namespace('Account')->prefix('account')->middleware('auth')->group(function() {

        // Settings
        Route::namespace('Settings')->group(function() {

            // Index
            Route::get('settings', MainLivewire\Account\Settings\SettingsComponent::class);

        });

        // Password
        Route::namespace('Password')->group(function() {

            // Index
            Route::get('password', MainLivewire\Account\Password\PasswordComponent::class);

        });

        // Profile
        Route::namespace('Profile')->group(function() {

            // Index
            Route::get('profile', MainLivewire\Account\Profile\ProfileComponent::class);

        });

        // Verification center
        Route::namespace('Verification')->group(function() {

            // Index
            Route::get('verification', MainLivewire\Account\Verification\VerificationComponent::class);

        });

        // Orders
        Route::namespace('Orders')->prefix('orders')->group(function() {

            // All
            Route::get('/', MainLivewire\Account\Orders\OrdersComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Requirements
                Route::get('requirements', MainLivewire\Account\Orders\Options\RequirementsComponent::class);

                // Delivered work
                Route::get('files', MainLivewire\Account\Orders\Options\FilesComponent::class);

            });

        });

        // Reviews
        Route::namespace('Reviews')->prefix('reviews')->group(function() {

            // Reviews
            Route::get('/', MainLivewire\Account\Reviews\ReviewsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Create
                Route::get('create/{itemId}', MainLivewire\Account\Reviews\Options\CreateComponent::class);

                // Preview
                Route::get('preview/{id}', MainLivewire\Account\Reviews\Options\PreviewComponent::class);

                // Edit
                Route::get('edit/{id}', MainLivewire\Account\Reviews\Options\EditComponent::class);

            });

        });

        // Favorite list
        Route::namespace('Favorite')->prefix('favorite')->group(function() {

            // List
            Route::get('/', MainLivewire\Account\Favorite\FavoriteComponent::class);

        });

        // Billing
        Route::namespace('Billing')->prefix('billing')->group(function() {

            // Billing
            Route::get('/', MainLivewire\Account\Billing\BillingComponent::class);

        });

        // Refunds
        Route::namespace('Refunds')->prefix('refunds')->group(function() {

            // Refund
            Route::get('/', MainLivewire\Account\Refunds\RefundsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Request
                Route::get('request/{id}', MainLivewire\Account\Refunds\Options\RequestComponent::class);

                // Details
                Route::get('details/{id}', MainLivewire\Account\Refunds\Options\DetailsComponent::class);

            });

        });

        // Deposit
        Route::namespace('Deposit')->prefix('deposit')->group(function() {

            // Deposit
            Route::get('/', MainLivewire\Account\Deposit\DepositComponent::class);

            // History
            Route::get('history', MainLivewire\Account\Deposit\HistoryComponent::class);

        });

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function() {

            // Projects
            Route::get('/', MainLivewire\Account\Projects\ProjectsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Checkout
                Route::get('checkout/{id}', MainLivewire\Account\Projects\Options\CheckoutComponent::class);

                // Milestones
                Route::get('milestones/{id}', MainLivewire\Account\Projects\Options\MilestonesComponent::class);
                
            });

        });

        // Sessions
        Route::namespace('Sessions')->prefix('sessions')->group(function() {

            // All
            Route::get('/', MainLivewire\Account\Sessions\SessionsComponent::class);

        });

        // Submitted offers
        Route::namespace('Offers')->prefix('offers')->group(function() {

            // All
            Route::get('/', MainLivewire\Account\Offers\OffersComponent::class);

        });

    });

    // Create
    Route::namespace('Create')->middleware('auth')->group(function() {

        // Service
        Route::get('create', MainLivewire\Create\CreateComponent::class);

    });

    // Start selling
    Route::namespace('Become')->prefix('start_selling')->group(function() {

        // Become seller
        Route::get('/', MainLivewire\Become\SellerComponent::class);

    });

    // Seller dashboard
    Route::namespace('Seller')->prefix('seller')->middleware('seller')->group(function() {

        // Home
        Route::namespace('Home')->prefix('home')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Home\HomeComponent::class);

        });

        // Gigs
        Route::namespace('Gigs')->prefix('gigs')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Gigs\GigsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Analytics
                Route::get('analytics/{id}', MainLivewire\Seller\Gigs\Options\AnalyticsComponent::class);

                // Edit
                Route::get('edit/{id}', MainLivewire\Seller\Gigs\Options\EditComponent::class);

            });

        });

        // Reviews
        Route::namespace('Reviews')->prefix('reviews')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Reviews\ReviewsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Details
                Route::get('details/{id}', MainLivewire\Seller\Reviews\Options\DetailsComponent::class);

            });

        });

        // Orders
        Route::namespace('Orders')->prefix('orders')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Orders\OrdersComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Details
                Route::get('details/{id}', MainLivewire\Seller\Orders\Options\DetailsComponent::class);

                // Deliver
                Route::get('deliver/{id}', MainLivewire\Seller\Orders\Options\DeliverComponent::class);

                // Requirements
                Route::get('requirements/{id}', MainLivewire\Seller\Orders\Options\RequirementsComponent::class);

            });

        });

        // Portfolio
        Route::namespace('Portfolio')->prefix('portfolio')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Portfolio\PortfolioComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Create
                Route::get('create', MainLivewire\Seller\Portfolio\Options\CreateComponent::class);

                // Edit
                Route::get('edit/{id}', MainLivewire\Seller\Portfolio\Options\EditComponent::class);

            });

        });

        // Earnings
        Route::namespace('Earnings')->prefix('earnings')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Earnings\EarningsComponent::class);

        });

        // Withdrawals
        Route::namespace('Withdrawals')->prefix('withdrawals')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Withdrawals\WithdrawalsComponent::class);

            // Settings
            Route::get('settings', MainLivewire\Seller\Withdrawals\SettingsComponent::class);

            // Create
            Route::get('create', MainLivewire\Seller\Withdrawals\CreateComponent::class);

        });

        // Refunds
        Route::namespace('Refunds')->prefix('refunds')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Refunds\RefundsComponent::class);

            // Options
            Route::namespace('Options')->group(function() {

                // Details
                Route::get('details/{id}', MainLivewire\Seller\Refunds\Options\DetailsComponent::class);

            });

        });

        // Projects
        Route::namespace('Projects')->prefix('projects')->group(function() {

            // Index
            Route::get('/', MainLivewire\Seller\Projects\ProjectsComponent::class);

            // Milestones
            Route::namespace('Milestones')->prefix('milestones')->group(function() {

                // List
                Route::get('{id}', MainLivewire\Seller\Projects\Milestones\MilestonesComponent::class);

            });

            // Bid
            Route::namespace('Bids')->prefix('bids')->group(function() {

                // List
                Route::get('/', MainLivewire\Seller\Projects\Bids\BidsComponent::class);

                // Options
                Route::namespace('Options')->group(function() {

                    // Checkout
                    Route::get('checkout/{id}', MainLivewire\Seller\Projects\Bids\Options\CheckoutComponent::class);

                    // Edit
                    Route::get('edit/{id}', MainLivewire\Seller\Projects\Bids\Options\EditComponent::class);

                });

            });

        });

        // Offers
        Route::namespace('Offers')->prefix('offers')->group(function() {

            // All
            Route::get('/', MainLivewire\Seller\Offers\OffersComponent::class);

        });

    });

    // Help
    Route::namespace('Help')->prefix('help')->group(function() {

        // Contact
        Route::namespace('Contact')->group(function() {

            // Index
            Route::get('contact', MainLivewire\Help\Contact\ContactComponent::class);

        });

    });

    // Categories
    Route::namespace('Categories')->prefix('categories')->group(function() {

        // Parent category
        Route::get('{parent}', MainLivewire\Categories\CategoryComponent::class);

        // Subcategory
        Route::get('{parent}/{subcategory}', MainLivewire\Categories\SubcategoryComponent::class);

    });

    // Profile
    Route::namespace('Profile')->prefix('profile')->group(function() {

        // Username
        Route::get('{username}', MainLivewire\Profile\ProfileComponent::class);

        // Portfolio list
        Route::get('{username}/portfolio', MainLivewire\Profile\PortfolioComponent::class);

        // Get project
        Route::get('{username}/portfolio/{slug}', MainLivewire\Profile\ProjectComponent::class);

    });

    // Hire
    Route::namespace('Hire')->prefix('hire')->group(function() {

        // skill
        Route::get('{keyword}', MainLivewire\Hire\HireComponent::class);

    });

    // Messages
    Route::namespace('Messages')->prefix('messages')->middleware('auth')->group(function() {

        // Index
        Route::get('/', MainLivewire\Messages\MessagesComponent::class);

        // New
        Route::get('new/{username}', MainLivewire\Messages\NewComponent::class);

        // Conversation
        Route::get('{conversationId}', MainLivewire\Messages\ConversationComponent::class);

    });

    // Search
    Route::namespace('Search')->prefix('search')->group(function() {

        // Keyword
        Route::get('/', MainLivewire\Search\SearchComponent::class);

    });

    // Page
    Route::namespace('Page')->prefix('page')->group(function() {

        // Index
        Route::get('{slug}', MainLivewire\Page\PageComponent::class);

    });

    // Reviews
    Route::namespace('Reviews')->prefix('reviews')->group(function() {

        // Index
        Route::get('{id}', MainLivewire\Reviews\ReviewsComponent::class);

    });

});

// Main (Controllers)
Route::namespace('App\Http\Controllers\Main')->group(function() {

    // Posting
    Route::namespace('Post')->prefix('post')->middleware('auth')->group(function() {

        // Project
        Route::namespace('Project')->prefix('project')->group(function() {

            // Get
            Route::get('/', 'ProjectController@form');

            // Post
            Route::post('/', 'ProjectController@create');

            // Skills
            Route::post('skills', 'ProjectController@skills');

        });

    });

    // Edit project
    Route::namespace('Account\Projects')->prefix('account/projects')->group(function() {

        // Edit
        Route::get('edit/{id}', 'EditController@form');

        // Update
        Route::post('edit/{id}', 'EditController@update');

    });

});

// Uploads
Route::namespace('App\Http\Controllers\Uploads')->prefix('uploads')->group(function() {

    // Documents
    Route::namespace('Documents')->prefix('documents')->group(function() {

        // Doc
        Route::get('{uid}', 'DocumentController@download');

    });

    // Order requirements
    Route::namespace('Requirements')->prefix('requirements')->middleware('auth')->group(function() {

        // Order requirements
        Route::get('{orderId}/{itemId}/{reqId}/{fileId}', 'RequirementsController@download');

    });

    // Order delivered work
    Route::namespace('Delivered')->prefix('delivered')->middleware('auth')->group(function() {

        // Order delivered
        Route::get('{orderId}/{itemId}/{workId}/{fileId}', 'DeliveredController@download');

    });

    // Verifications
    Route::namespace('Verifications')->prefix('verifications')->group(function() {

        // File
        Route::get('{id}/{type}/{fileId}', 'VerificationsController@download');

    });

    // Offers
    Route::namespace('Offers')->prefix('offers')->middleware('auth')->group(function() {

        // File
        Route::get('{file}', 'OffersController@attachment');

        // Work
        Route::get('work/{file}', 'OffersController@work');

    });

});

// Callback routes for payment gateways
Route::namespace('App\Http\Controllers\Callback')->prefix('callback')->group(function() {

    // Asaas
    Route::post('asaas', 'AsaasController@callback');

    // Campay
    Route::get('campay/success', 'CampayController@success');
    Route::get('campay/failed', 'CampayController@failed');

    // Cashfree
    Route::get('cashfree', 'CashfreeController@callback');
    Route::post('cashfree', 'CashfreeController@webhook');

    // cPay
    Route::get('cpay/success', 'CpayController@success');
    Route::get('cpay/failed', 'CpayController@failed');

    // Duitku
    Route::get('duitku', 'DuitkuController@callback');

    // Ecpay
    Route::post('ecpay', 'EcpayController@callback');

    // Epoint.az
    Route::get('epoint/success', 'EpointController@success');
    Route::get('epoint/failed', 'EpointController@failed');

    // FastPay
    Route::get('fastpay/success', 'FastpayController@success');
    Route::get('fastpay/failed', 'FastpayController@failed');
    Route::get('fastpay/cancel', 'FastpayController@cancel');

    // Flutterwave
    Route::get('flutterwave', 'FlutterwaveController@callback');

    // Freekassa
    Route::post('freekassa', 'FreekassaController@webhook');
    Route::get('freekassa/success', 'FreekassaController@success');
    Route::get('freekassa/failed', 'FreekassaController@failed');

    // Genie business
    Route::get('genie-business', 'GenieController@callback');
    Route::post('genie-business', 'GenieController@webhook');

    // Iyzico
    Route::post('iyzico', 'IyzicoController@callback');

    // Jazzcash
    Route::post('jazzcash', 'JazzcashController@callback');

    // Mercadopago
    Route::get('mercadopago/success', 'MercadopagoController@success');
    Route::get('mercadopago/pending', 'MercadopagoController@pending');
    Route::get('mercadopago/failed', 'MercadopagoController@failed');

    // Mollie
    Route::get('mollie', 'MollieController@callback');
    Route::post('mollie', 'MollieController@webhook');

    // Nowpayments.io
    Route::post('nowpayments/ipn', 'NowpaymentsController@ipn');
    Route::get('nowpayments/success', 'NowpaymentsController@success');
    Route::get('nowpayments/cancel', 'NowpaymentsController@cancel');

    // Paymob
    Route::get('paymob', 'PaymobController@callback');

    // Paymob Pakistan
    Route::get('paymob-pk', 'PaymobPkController@callback');

    // PayPal
    Route::get('paypal', 'PaypalController@callback');

    // Paystack
    Route::get('paystack', 'PaystackController@callback');
    Route::post('paystack', 'PaystackController@webhook');

    // Paytabs
    Route::post('paytabs', 'PaytabsController@callback');

    // PayTR
    Route::get('paytr/success', 'PaytrController@success');
    Route::get('paytr/failed', 'PaytrController@failed');
    Route::post('paytr', 'PaytrController@webhook');

    // Razorpay
    Route::get('razorpay', 'RazorpayController@callback');

    // Robokassa
    Route::post('robokassa', 'RobokassaController@callback');

    // Stripe
    Route::get('stripe', 'StripeController@callback');

    // Vnpay
    Route::get('vnpay', 'VnpayController@callback');

    // Xendit
    Route::get('xendit/success', 'XenditController@success');
    Route::get('xendit/failed', 'XenditController@failed');
    Route::post('xendit', 'XenditController@webhook');

    // Youcanpay
    Route::get('youcanpay', 'YoucanpayController@callback');


});