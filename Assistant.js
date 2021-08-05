
  window.watsonAssistantChatOptions = {
      integrationID: "d3929fbd-b8d1-4b03-bbb5-703f3bd2cc22", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "0b11839e-ef5b-4702-bce9-d97e7e2c70ca", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
