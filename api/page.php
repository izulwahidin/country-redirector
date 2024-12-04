<?php
$clickbait = [
    ["title" => "What They Don't Want You to See...", "desc" => "A hidden truth that challenges everything you know."],
    ["title" => "The Moment Everything Changed...", "desc" => "A split second that altered reality forever."],
    ["title" => "You Won't Believe What Happened Next...", "desc" => "An unexpected twist that defies all logic."],
    ["title" => "This Completely Broke the Internet...", "desc" => "A viral phenomenon that left everyone speechless."],
    ["title" => "I Can't Even Begin to Explain...", "desc" => "A scenario so bizarre, words fail to capture it."],
    ["title" => "Something Weird Just Happened...", "desc" => "An inexplicable event that breaks all rules."],
    ["title" => "Nobody Expected This...", "desc" => "A surprise that came out of absolute nowhere."],
    ["title" => "The Secret No One Talks About...", "desc" => "A hidden reality lurking just beneath the surface."],
    ["title" => "Wait... What?!", "desc" => "A moment of pure, mind-bending confusion."],
    ["title" => "This Changes Everything...", "desc" => "A revelation that rewrites the entire narrative."],
    ["title" => "The Truth Is Finally Revealed...", "desc" => "The shocking reality behind a long-standing mystery."],
    ["title" => "Shocking Moments Caught on Camera...", "desc" => "Unbelievable footage that challenges belief."],
    ["title" => "Everything You Thought You Knew Is Wrong...", "desc" => "A paradigm shift that upends all understanding."],
    ["title" => "The Hidden Reality Behind...", "desc" => "The unseen story behind a seemingly normal event."],
    ["title" => "Mind-Blowing Secrets Exposed...", "desc" => "Revelations that will make your jaw drop."],
    ["title" => "You'll Never Look at This the Same Way Again...", "desc" => "A perspective that completely transforms perception."],
    ["title" => "The Unbelievable Story That...", "desc" => "A narrative so incredible, it sounds like fiction."],
    ["title" => "What Happened Next Is Insane...", "desc" => "An outcome that defies all possible expectations."],
    ["title" => "The World Stopped When This...", "desc" => "A moment so extraordinary, time seemed to pause."],
    ["title" => "Impossible Things That Actually Happened...", "desc" => "Reality-breaking events that actually occurred."],
    ["title" => "The Conspiracy They Tried to Hide...", "desc" => "A cover-up exposed in stunning detail."],
    ["title" => "When Reality Breaks...", "desc" => "The point where normal rules simply stop applying."],
    ["title" => "Something Is Not Right Here...", "desc" => "An unsettling scenario with something fundamentally off."],
    ["title" => "The Unexplained Mystery of...", "desc" => "A puzzle that continues to baffle experts."],
    ["title" => "This Should Not Be Possible...", "desc" => "An event that defies all known laws of nature."],
    ["title" => "The Moment Everything Went Crazy...", "desc" => "When normality suddenly and completely unravels."],
    ["title" => "Breaking: Something Big Is Happening...", "desc" => "An unfolding event of massive, unprecedented scale."],
    ["title" => "The Untold Story That Will...", "desc" => "A narrative hidden from public knowledge."],
    ["title" => "Jaw-Dropping Moment Captured...", "desc" => "An instant so remarkable, it leaves you breathless."],
    ["title" => "The Thing They Don't Want You to Know...", "desc" => "A suppressed truth waiting to be revealed."],
    ["title" => "Unreal Footage of...", "desc" => "Visual evidence that challenges understanding."],
    ["title" => "The Bizarre Incident That...", "desc" => "A sequence of events too strange to be coincidental."],
    ["title" => "When Science Can't Explain...", "desc" => "Phenomena that push the boundaries of known knowledge."],
    ["title" => "The Strange Case of...", "desc" => "An investigation into the utterly inexplicable."],
    ["title" => "Something Totally Unexpected...", "desc" => "A scenario that comes from absolutely nowhere."],
    ["title" => "The Impossible Just Happened...", "desc" => "When the unimaginable becomes reality."],
    ["title" => "Hidden Truths Finally Revealed...", "desc" => "Long-concealed secrets brought into the light."],
    ["title" => "The Moment That Changed Everything...", "desc" => "A single instant that rewrote entire histories."],
    ["title" => "What Happened Next Is Beyond Belief...", "desc" => "An outcome so incredible, it sounds fabricated."],
    ["title" => "The Shocking Truth Behind...", "desc" => "The real story, more stunning than fiction."],
    ["title" => "Incredible Moments That...", "desc" => "Instances that defy all rational explanation."],
    ["title" => "The Secret World of...", "desc" => "A hidden realm just beyond normal perception."],
    ["title" => "When Everything Goes Wrong...", "desc" => "The point where chaos completely takes over."],
    ["title" => "The Unexplained Phenomenon...", "desc" => "A mystery that continues to perplex researchers."],
    ["title" => "Something Is Definitely Off Here...", "desc" => "A scenario with an undeniable sense of wrongness."],
    ["title" => "The Twist Nobody Saw Coming...", "desc" => "An unexpected turn that shatters all predictions."],
    ["title" => "Breaking the Internet...", "desc" => "A viral sensation that completely dominates discourse."],
    ["title" => "The Mystery That Haunts...", "desc" => "An unsolved enigma that refuses to be forgotten."],
    ["title" => "When Reality Gets Weird...", "desc" => "The precise moment normality completely breaks down."],
    ["title" => "The Unbelievable Truth About...", "desc" => "A reality more fantastic than any imagination."]
];
shuffle($clickbait);



$title = $clickbait[0]["title"];
$desc = $clickbait[0]["desc"];

$img = "https://cdn.jsdelivr.net/gh/izulwahidin/WStatic@main/og.webp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?=$title?></title>
    <meta name="description" content="<?=$desc?>">

    <!-- Open Graph Meta Tags (For Facebook, LinkedIn, etc.) -->
    <meta property="og:title" content="<?=$title?>">
    <meta property="og:description" content="<?=$desc?>">
    <meta property="og:image" content="<?=$img?>">
    <meta property="og:image:type" content="image/webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?=$title?>">
    <meta name="twitter:description" content="<?=$desc?>">
    <meta name="twitter:image" content="<?=$img?>">

    <!-- Fallback Meta Tags -->
    <link rel="image_src" href="<?=$img?>">
</head>
<style>
    body{
        background-color: black;
        min-width: 100vw;
        min-height: 100vh;
        background-image: url("https://cdn.jsdelivr.net/gh/izulwahidin/WStatic@main/rickroll.gif");
        background-size: cover; /* Ensures the image covers the entire screen */
        background-repeat: no-repeat; /* Prevents tiling */
        background-position: center; /* Centers the image */
        margin: 0; /* Removes default margin */
    }
</style>
    <body></body>
</html>